<?php dirname(__DIR__); include(dirname(__DIR__).'/data/person_data_access.php');?>
<?php
    function addPerson($person){
        return addPersonToDb($person);
    }
	function addEmployee($person){
        return addEmployeeToDb($person);
    }
	function addUser($person){
        return addUserToDb($person);
    }
    
    function editPerson($person){
        return editPersonToDb($person);
    }
	
	function editUser($person){
        return editUserToDb($person);
    }
	
	function editUserByAdmin($name,$email,$phone,$dept,$id){
        return editUserByAdminToDb($name,$email,$phone,$dept,$id);
    }
	function editEmployee($name,$email,$phone){
        return editEmployeeToDb($name,$email,$phone);
    }
	
	function changeUserPass($person){
        return changeUserPassToDb($person);
    }
	function changeEmployeePass($pass,$id){
        return changeEmployeePassToDb($pass,$id);
    }
	
    
    function removePerson($personId){
        return removePersonFromDb($personId);
    }
	function removeUser($personId){
        return removeUserFromDb($personId);
    }
    
    function getAllPersons(){
        return getAllPersonsFromDb();
    }
	function searchUser($string){
        return searchUserFromDb($string);
    }
	function getAllUsers(){
        return getAllUsersFromDb();
    }
    
    function getPersonById($personId){
        return getPersonByIdFromDb($personId);
    }
	function getUserById($personId){
        return getUserByIdFromDb($personId);
    }
    
    function getPersonsByName($personName){
        return getPersonsByNameFromDb($personName);
    }
    
    function getPersonsByEmail($personEmail){
        return getPersonsByEmailFromDb($personEmail);
    }
	
	function getUsersByEmail($personEmail){
        return getUsersByEmailFromDb($personEmail);
    }
	function getEmployeeByEmail($personEmail){
        return getEmployeeByEmailFromDb($personEmail);
    }
	
    
    function getPersonsByNameOrEmail($key){
        return getPersonsByNameOrEmailFromDb($key);
    }
    
    function isUniquePersonEmail($personEmail){
        $persons  = getAllPersons();
        $isUnique = true;
        foreach($persons as $person){
            if($person['email']==$personEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
    
    function isUniquePersonEmailForUpdate($personId, $personEmail){
        $persons  = getAllPersons();
        $isUnique = true;
        foreach($persons as $person){
            if($person['id']!=$personId && $person['email']==$personEmail)
                $isUnique = false;
                break;
        }
        return $isUnique;
    }
?>