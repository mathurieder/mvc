<?php

class MySQL
{
	private $result = null;
	private $link = null;
	private static $instance = null;

	public static function getInstance(array $config = array())
	{
		if (self::$instance === null)
		{
			self::$instance = new self($config);
		}
		return self::$instance;
	}
	
	public function __construct(array $config = array())
	{
		list($host, $user, $password, $database) = $config;
		if ((!$this->link = mysqli_connect($host, $user, $password, $database)))
		{
			throw new Exception('Verbindungsfehler: ' . mysqli_connect_error());
		}
	}

    public function query($query)
    {
        if (is_string($query) and !empty($query))
        {
            if ((!$this->result = mysqli_query($this->link, $query)))
            {
                throw new Exception('Queryfehler: ' . $query . ' Fehlermeldung : ' . mysqli_error($this->link));
            }
        }
    }
    
	public function fetch()
	{
		if ((!$row = mysqli_fetch_object($this->result)))
		{
			mysqli_free_result($this->result);
            return false;
        }
        return $row;
	}
    
    public function countRows()
    { 
        if ($this->result !== NULL)
        {
           return mysqli_num_rows($this->result); 
        }
        return 0;
    }
    
	function __destruct()
	{
		is_resource($this->link) and mysqli_close($this->link);
	}
}