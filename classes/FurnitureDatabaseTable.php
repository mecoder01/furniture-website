<?php
class FurnitureDatabaseTable{
	public $tableName;
	public function __construct($tableName){
		$this->tableName = $tableName;
	}
	// method is created for inserting and updating the data
	function saveData($data, $pk = ''){
	    try{ //insert action is taken first 
	        $this->insertData($data); //inserting data
	        return true;
	    }
	    // if not inserting then data will be update
	    catch(Exception $exe){
	        $this->updateData($data, $pk); //updating data
	        return true;
	    }
	}
	//method is created for inserting the data
	function insertData($data) {
	    global $pdo;
	    $keys = array_keys($data);
	    $keyImplode = implode(', ', $keys);
	    $keysImplode = implode(', :', $keys);
	    $query = "INSERT INTO $this->tableName($keyImplode) VALUES(:$keysImplode)";
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($data); //executing the process
	    return true;
	}
	//method is created for updating the data
	function updateData($data, $pk){
	    global $pdo;
	    $para = [];
	    // establishing for each loop
	    foreach ($data as $key => $value) {
	        $para[] = $key . ' = :' . $key;
	    }
	    $paraList = implode(', ', $para);
	    $query = "UPDATE $this->tableName SET $paraList WHERE $pk = :pk";
	    $data['pk'] = $data[$pk];
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($data); //executing the array
	    return true;
	}
	//method is created for selecting the data
	function select($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->tableName WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria); //executing the array
	    return $stmt;
	}
	//method is created for selecting all the data
	function selectAll() {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->tableName");
	    $stmt->execute(); //executing the process
	    return $stmt;
	}
	//method is created for deleting the data
	function deleteData($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("DELETE FROM $this->tableName WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria); //executing the array
	    return $stmt;
	}
	//method is created for selecting the data with limit
	function selectWithLimit($columnName, $valueName, $limit) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->tableName WHERE $columnName = :valueName LIMIT $limit");
	    $crit = ['valueName' => $valueName];
	    $stmt->execute($crit); //executing the array
	    return $stmt;
	}
	//method is created for joining the data of the two table
	function joiningId($next_table ,$id){
		global $pdo;
		$stmt = $pdo->prepare("SELECT * FROM $this->tableName INNER JOIN $next_table WHERE $this->tableName.$id = $next_table.$id");
		$stmt->execute(); //executing the process
		return $stmt;
	}
}
?>