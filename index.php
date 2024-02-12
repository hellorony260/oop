<?php

// 01
// class Car
// {
//     public $name = 'Hello world';
//     function name()
//     {
//         return 'Tata' . PHP_EOL;
//     }
// }
// $carDatails = new Car();
// echo $carDatails->name();
// echo $carDatails->name;

//02
// class Car
// {
//     public function __construct()
//     {
//         echo 'Hello constructor';
//     }
// }
// new Car();

//03
// class Car
// {
//     public function __construct($a, $b)
//     {
//         echo $a + $b;
//     }
// }
// new Car(5, 7);

//04
// class Car
// {
//     public function __construct($name)
//     {
//         echo $name;
//     }
// }
// new Car('john');



//05
// class Info
// {
//     public $name;
//     public $age;
// }
// $obj = new Info();
// echo $obj->name = 'mcet' . PHP_EOL;
// echo $obj->age = 13;


//06
// abstract class Father
// {
//     public function info()
//     {
//         echo 'i am from father';
//     }
// }

// $obj = new Father();
// $obj->info();

// class Son extends Father
// {
//     public function info()
//     {
//         echo 'i am from Son';
//     }
// }
// $son = new Son();
// $son->info();



class Info
{
    public static function show()
    {
        echo 'hello world';
    }
}
$obj = new Info();
// $obj->show();
// Info::show();



class Father
{
    public function info()
    {
        echo 'i am from father' . PHP_EOL;
    }
}
class Son extends Father
{
    public function info()
    {
        parent::info();
        echo 'i am from Son';
    }
}

// $son = new Son();
// $son->info();



class information
{
    public static $name = 'John Doe';
    public static function show()
    {
        // echo $this->name = 'hello';
        echo self::$name;
    }
}
$obj = new information();
$obj->show();
