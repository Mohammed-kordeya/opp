<?php
//class dog
//{
//    public $breed;
//    public $size;
//    public $age;
//    public $color;
//    public function __construct($d, $s, $a, $c)
//    {
//        $this->breed = $d;
//        $this->size = $s;
//        $this->age = $a;
//        $this->color = $c;
//    }
//
//    public function Eat()
//    {
//        echo $this->breed . " is eating now";
//    }
//    public function sleep()
//    {
//        echo $this->breed . " is sleeping now";
//    }
//    public function sit()
//    {
//        echo $this->breed . " is sitting now";
//    }
//    public function run()
//    {
//        echo $this->breed . " is running now";
//    }
//}
//
//
//
//$dog1 = new dog("Nep", "large", "5 years", "black");
//
//$dog1->Eat();
//echo "<br/>";
//
//echo var_dump($dog1);
//echo "<br/>";
//$dog2 = new dog("mal", "small", "2 years", "white");
//
//$dog2->sleep();
//echo "<br/>";
//
//
//echo var_dump($dog2);
//
//
//
//echo "<br/>";
//
//
//$dog3 = new dog("cho", "Midum", "3 years", "brown");
//
//$dog3->run();
//echo "<br/>";
//
//
//echo var_dump($dog3);
//class Employees{
//    public $name; 
//    public $age;
//    public $phone;
//    public $address;
//}
//class FullTime extends Employees
//{
//    public $salary;
//}
//class PartTime extends Employees
//{
//    public $hour;
//    public $price;
//    public function getSalary()
//    {
//          return $this->hour * $this->price;
//          
//
//    }
//    
//
//}
//$f1 = new FullTime();
//$f1->name = "mohammed";
//$f1->age="13";
//$f1->phone="133";
//$f1->address="gaza";
//$f1->salary="1$";
//
//echo var_dump($f1);
//echo "<br/>";
//
//$p1 = new PartTime();
//$p1->name="mohammed";
//$p1->age="133";
//$p1->phone="1233";
//$p1->address="gaza";
//$p1->hour="3";
//$p1->price="6";
//echo $p1 ->getSalary();
//echo"<pre>";
//echo var_dump($p1);
//echo"</pre>";
//
require "connecion.php";
require "users.php";
$p1 = new users('','g','m@gmail.com',132,$c1->getCnnection());
$p2 = new users('','ff','ma@gmail.com',132,$c1->getCnnection());

$p1->addusers();
$p2->addusers();



