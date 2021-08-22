<?php

function _echo($str){
  echo "$str \n";
}

class Person {
  const NATURE = 'human';
  public $name;
  private $gender;

  public function __construct($name, $gender) {
    $this->name = $name;
    // $this->gender = $gender;
    $this->setGender($gender);
  }

  public static function check(){
    return self::NATURE;
  }

  public function sayHello(){
    return "$this->name says Hello!";
  }

  public function setGender($gender) {
    $this->gender = ucfirst($gender);
  }

  public function getGender(){
    return "$this->name is $this->gender";
  }

  private function test(){
    return 'test';
  }

}

class Employee extends Person {
  const COMPANY_NAME = 'Omi Inc';

  public $job;
  private $salary;
  
  public function __construct($job, $name, $gender) {
    parent::__construct($name, $gender);

    $this->job = $job;
  }

  public function __set($name, $value) {
    $this->$name = $value;
  }
  public function __get($name) {
    return $this->$name;
  }

  public function getJob() {
    return "$this->name works as a $this->job";
  }
}

// $omi = new Person('Omi', 'Male');
// _echo($omi->name);
// _echo($omi->gender);

$omi = new Employee('Full Stack Developer','Omi', 'male');

_echo(Employee::COMPANY_NAME); 
// _echo($omi->test());
_echo($omi->sayHello());
_echo($omi->getGender());
_echo($omi->getJob());

$omi->setGender('female');
_echo($omi->getGender());
$omi->salary = '60,000';

// print_r($omi);

_echo($omi->salary);
_echo(Person::check());

?>