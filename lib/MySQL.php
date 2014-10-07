<?php

class MySQL
{
	private $result = null;
	private $link = null;
	private static $instance = null;

	public static function getInstance(array $config = array())
	{
		if (self::$instance === null) {
			self::$instance = new self($config);
		}

		return self::$instance;
	}

	public function __construct(array $config = array())
	{
		list($host, $user, $password, $database) = $config;

		$this->link = mysqli_connect($host, $user, $password, $database);
		if (!$this->link) {
			$error = mysqli_connect_error();
			throw new Exception("Verbindungsfehler: $error");
		}
	}

    public function query($query)
    {
        if (is_string($query) and !empty($query)) {
			$this->result = mysqli_query($this->link, $query);
            if (!$this->result) {
				$error = mysqli_error($this->link);
                throw new Exception("'Queryfehler: $query Fehlermeldung : $error");
            }
        }
    }

	public function fetch()
	{
		$row = mysqli_fetch_object($this->result);
		if (!$row) {
			mysqli_free_result($this->result);
            return false;
        }

        return $row;
	}

    public function countRows()
    {
        if ($this->result !== null) {
           return mysqli_num_rows($this->result);
        }

        return 0;
    }

	function __destruct()
	{
		if (is_resource($this->link)) {
			mysqli_close($this->link);
		}
	}
}
