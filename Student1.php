<?php
class student{

    public $name;
    public $id;
    public $address;
    public $age;

    public function getinformation(){
        echo "student name = ".$this->name."\n";
        echo "student id = ".$this->id."\n";
      //  echo "student address = ".$this->address."\n";
        //echo "student age = ".$this->age."\n";
    }
//this sleep method is used for a specific properties which we want to save ;
   // public function __sleep()
    //{
     //   return array("name","age");
    //}
// this sleep method is used for all the properties which we want to save;
    public function __sleep()
    {
     return array_keys(get_object_vars($this));
    }
    public function __wakeup()
    {
        echo "hello guys this is wakeup method \n";
    }
}

