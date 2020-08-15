<?php


class User
{
    private $user_id;
    private $firstname;
    private $lastname;
    private $email;
    private $objectVars;

    public function __construct()
    {
        $this->objectVars = get_object_vars($this);
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFirstName($firstName): void
    {
        $this->firstname = $firstName;
    }

    public function setLastName($lastName): void
    {
        $this->lastname = $lastName;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    private function getObjectFields(){
        return $this->objectVars;
    }

    private static function getUsers()
    {
        global $db;
        $sql = "SELECT * FROM users";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $users = [];
        while ($user = $stmt->fetch(PDO::FETCH_ASSOC)){
           array_push($users, $user);
        }
        return $users;
    }

    public static function getUsersAsObjects(){
        $usersAsObjects = [];
        $users = self::getUsers();
        foreach ($users as $user){
            $userObject = new User();
            foreach ($user as $key => $value){
                if(array_key_exists($key, $userObject->objectVars)){
                    $userObject->$key = $value;
                }
            }
            $usersAsObjects[] = $userObject;
        }
        return $usersAsObjects;
    }
}