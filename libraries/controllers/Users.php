<?php
namespace Controllers;

class Users{
    private $errors = [];
    private $id;
    private $name;
    private $firstname;
    private $phone;
    private $role;
    private $adress;
    private $email;
    private $password;

    const NAME_INVALID = 1;
    const FIRSTNAME_INVALID = 2;
    const PHONE_INVALID = 3;
    const ADRESS_INVALID = 4;
    const EMAIL_INVALID = 5;
    const PASSWORD_INVALID = 6;

    public function __construct($data = []) 
    {
        if(!empty($data))
        {
            $this->hydrater($data);
        }
    }



    public function hydrater($data)
    {
        foreach($data as $attribut => $value)
        {
            $methodSetters = 'set'.ucfirst($attribut);
            $this->$methodSetters($value);
        }
    }


    public function setId($id)
    {
        if(!empty($id))
        {
            $this->id = (int) $id;
        }
    }

    public function setName($name)
    {
        if(!is_string($name) || empty($name))
        {
            $this->errors[] = self::NAME_INVALID;
        }else{
            $this->name = htmlspecialchars($name);
        }
    }

    public function setFirstname($firstname)
    {
        if(!is_string($firstname) || empty($firstname))
        {
            $this->errors[] = self::FIRSTNAME_INVALID;
        }else{
            $this->firstname = htmlspecialchars($firstname);
        }
    }

    public function setPhone($phone)
    {
        if(!empty($phone))
        {
            $this->phone = htmlspecialchars($phone);
        }  
    }

    public  function setAdress($adress)
    {
        if(!empty($adress))
        {
            $this->adress = htmlspecialchars($adress);
        }
    }

    public  function setRole($role)
    {
        if(!empty($role))
        {
            $this->role = htmlspecialchars($role);
        }
    }

    
    public function setEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->email = htmlspecialchars($email);
        }else{
            $this->errors[] = self::EMAIL_INVALID;
        }
    }

    public function setPassword($password)
    {
        if(strlen($password) > 5) 
        {
            $this->password = password_hash($password, PASSWORD_BCRYPT);
        }else
        {
            $this->errors[] = self::PASSWORD_INVALID;
        }
        
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getPhone()
    {
        return $this->phone;
    }
    public function getAdress()
    {
        return $this->adress;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }


    
    public function isUserValid()
    {
        return !(
            empty($this->name) || empty($this->firstname)
            || empty($this->email) || empty($this->password)
            || empty($this->phone) || empty($this->adress)
        );
    }


}