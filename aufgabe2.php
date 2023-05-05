<?php
class person{
   Public $name;
   Public $age;
 
   public function getName(){
    return $this->name;
    }
   public function getAge(){
    return $this->age;
    }

   public function setName($name){
    return $this->name = $name;
    }
   public function setAge($age){
    return $this->age = $age;
    }

}
$person1 = new person();
$person1-> setName("John");
$person1-> setAge(99);

// echo "<pre>";
// var_dump($person1);
// echo "</pre>";

echo "Name : ".$person1->name."<br>";
echo "age : ".$person1->age."<br>";




?>