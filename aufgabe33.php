<?php
class Person {
  public $name;
  public $age;
  public $gender;
  
  public function __construct($name, $age, $gender) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }

  public function displayInfo() {
    echo "Name: " . $this->name . "<br>";
    echo "Age: " . $this->age . "<br>";
    echo "Gender: " . $this->gender . "<br>";
  }
}

class Student extends Person {
  public $studentID;
  public $course;

  public function __construct($name, $age, $gender, $studentID, $course) {
    parent::__construct($name, $age, $gender);
    $this->studentID = $studentID;
    $this->course = $course;
  }

  public function displayInfo() {
    parent::displayInfo();
    echo "Student ID: " . $this->studentID . "<br>";
    echo "Course: " . $this->course . "<br>";
  }
}

class Teacher extends Person {
  public $teacherID;
  public $subject;

  public function __construct($name, $age, $gender, $teacherID, $subject) {
    parent::__construct($name, $age, $gender);
    $this->teacherID = $teacherID;
    $this->subject = $subject;
  }

  public function displayInfo() {
    parent::displayInfo();
    echo "Teacher ID: " . $this->teacherID . "<br>";
    echo "Subject: " . $this->subject . "<br>";
  }
}


$person1 = new Person("John", 30, "male");
$student1 = new Student("Jane", 20, "female", "1234", "IT");
$teacher1 = new Teacher("Johny", 45, "male", "5678", "Math");


echo "<h2>Person:</h2>";
$person1->displayInfo();

echo "<h2>Student:</h2>";
$student1->displayInfo();

echo "<h2>Teacher:</h2>";
$teacher1->displayInfo();
?>