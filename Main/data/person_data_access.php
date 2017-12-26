<?php include(dirname(__DIR__).'/data/data_access.php'); ?>
<?php
    function addPersonToDb($person){
        $sql = "INSERT INTO person(id, name, email) VALUES(NULL, '$person[name]', '$person[email]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	function addUserToDb($person){
        $sql = "INSERT INTO user (NAME,EMAIL,PHONE,DEPARTMENT,GENDER,DOB,PASSWORD,STATUS) VALUES('$person[name]', '$person[email]','$person[phone]', '$person[dept]','$person[gender]', '$person[dob]','$person[pass]', '$person[status]')";
        $result = executeSQL($sql);
        return $result;
    }
	   
    
    function editPersonToDb($person){
        $sql = "UPDATE person SET name='$person[name]', email='$person[email]' WHERE user_id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }
	
	function changeUserPassToDb($person){
		echo $person['PASSWORD'];
		
       $sql = "UPDATE user SET password='$person[PASSWORD]' WHERE user_id=$person[USER_ID]";
        $result = executeSQL($sql);
		if($result ){
			echo "ok";
		}
		else{
			echo "not ok";
		}
        return $result;
    }
	
	function editUserToDb($person){
        $sql = "UPDATE user SET name='$person[name]', email='$person[email]',phone='$person[phone]',department='$person[dept]' WHERE user_id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }
    
    function removePersonFromDb($personId){
        $sql = "DELETE FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        return $result;
    }
    
    function getAllPersonsFromDb(){
        $sql = "SELECT * FROM person";        
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
    function getPersonByIdFromDb($personId){
        $sql = "SELECT * FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    }    

    function getPersonsByNameFromDb($personName){
        $sql = "SELECT * FROM person WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
    function getPersonsByEmailFromDb($personEmail){
        $sql = "SELECT * FROM person WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
	
	function getUsersByEmailFromDb($personEmail){
		
        $sql = "SELECT * FROM user WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
	function getEmployeeByEmailFromDb($personEmail){
		
        $sql = "SELECT * FROM enployee WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
	
    function getPersonsByNameOrEmailFromDb($key){
        $sql = "SELECT * FROM person WHERE name LIKE '%$key%' OR email LIKE '%$key%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
?>