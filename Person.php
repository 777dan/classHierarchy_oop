<?php
class Person
{
    protected $name;
    protected $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function __toString()
    {
        return "Имя: " . $this->name . "<br>Пол: " . $this->gender;
    }
}

class Citizen extends Person
{
    protected $country;
    protected $city;
    public function __construct($name, $gender, $country, $city)
    {
        parent::__construct($name, $gender);
        $this->country = $country;
        $this->city = $city;
    }
    public function __toString()
    {
        return "Имя: " . $this->name . "<br>Пол: " . $this->gender . "<br>Страна: " . $this->country . "<br>Город: " . $this->city;
    }
}

class Student extends Citizen
{
    protected $university;
    public function __construct($name, $gender, $country, $city, $university)
    {
        parent::__construct($name, $gender, $country, $city);
        $this->university = $university;
    }
    public function __toString()
    {
        return "Имя: " . $this->name . "<br>Пол: " . $this->gender . "<br>Страна: " . $this->country . "<br>Город: " . $this->city . "<br>Университет: " . $this->university;
    }
}

class Employee extends Citizen
{
    protected $profession;
    public function __construct($name, $gender, $country, $city, $profession)
    {
        parent::__construct($name, $gender, $country, $city);
        $this->profession = $profession;
    }
    public function __toString()
    {
        return "Имя: " . $this->name . "<br>Пол: " . $this->gender . "<br>Страна: " . $this->country . "<br>Город: " . $this->city . "<br>Профессия: " . $this->profession;
    }
}
