<?php
require_once('lib/MySQL.php');

class Model
{
    private $db = null;
    private $table = null;
     
    public function  __construct(MySQL $db, $table)
    {
        $this->db = $db;
		$this->table = $table;
    }

    public function fetchAll()
    {
		$rows = array();
		$this->db->query('SELECT * FROM ' . $this->table);
		while ($row = $this->db->fetch())
		{
			$rows[] = $row;
		}
		
		return $rows;  
    }

    public function insert(array $data)
    {
    	if (!empty($data))
    	{
    		$data = $this->quoteStrings($data);

    		$fields = implode(',', array_keys($data));
		    $values = implode(',', array_values($data));
		    $this->db->query('INSERT INTO ' . $this->table . ' (' . $fields . ')' . ' VALUES (' . $values . ')');
    	}
    }
    
    public function update(array $data, $id){
    	if (!empty($data))
    	{
    		$data = $this->quoteStrings($data);
    		
    		$set = '';
		    foreach($data as $field => $value)
		    {
		    	$set .= $field .'=' . $value . ',';
			}
			$set = substr($set, 0, -1);
			$this->db->query('UPDATE ' . $this->table . ' SET ' . $set . ' WHERE id=' . (int)$id);	
    	}
    }
    
    public function delete($id = null)
    {
        if ($id !== null)
        {
            $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=' . (int)$id);
        }
    }
    
    private function quoteStrings(array $data){
    	foreach ($data as $field => $value)
    	{
    		$value = mysql_escape_string($value);
    		if (!is_numeric($value))
    		{
    			$data[$field] = '\'' . $value . '\''; 
    		}
    	}
    	
    	return $data;
    }
}