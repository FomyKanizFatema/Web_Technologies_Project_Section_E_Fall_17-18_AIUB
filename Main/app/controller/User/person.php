<?php require_once "data/person_data_access.php"; ?>
<?php
    function addPerson($person){
        return addPersonToDb($person);
    }
    
    function editPerson($person){
        return editPersonToDb($person);
    }
    
    function removePerson($personId){
        return removePersonFromDb($personId);
    }
    
    function getAllPersons(){
        return getAllPersonsFromDb();
    }
    
    function getPersonById($personId){
        return getPersonByIdFromDb($personId);
    }
    
    function getPersonsByName($personName){
        return getPersonsByNameFromDb($personName);
    }
    
    function getPersonsByEmail($personEmail){
        return getPersonsByEmailFromDb($personEmail);
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