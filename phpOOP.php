<?php 

//OOP
    //Access Control - public(any),
    // private(Only in current class), protected(current class and child class)

    // class Animal
    // {
    //     public $name; //Property

    //     public function run(){  //menthod
    //         echo "$this->name is running..."; //this= Pseudo Varible

    //     }
    // }

    // $cat = new Animal;
    // $cat->name = "Shwe Wah"; //-> Ddart Operator
    // $cat->run();

    //Constructor

    // class Animal
    // {
    //     public function __construct() {
    //         echo "Creating Animal Object";
    //     }

    // }

    // $dog = new Animal;

    //Static property and method
    // class Animal
    // {
    //     static $type = "Mammal";

    //     static function info() {
    //         echo "Group: ".static::$type;
    //     }
    // }
    // echo Animal::$type;
    // Animal::info();

    // class Animal
    // {
    //     private $name;

    //     public function __construct($name) {
    //         $this->name = $name;
    //     }

    //     public function run() {
    //         echo "$this->name is running...";
    //     }
    // }

    // $dog = new Animal("Go Go");
    // $dog->run();

    //Constructor Property Promotion
    // class Animal
    // {
    //     public function __construct(private $name) {

    //     }

    //     public function run() {
    //         echo "$this->name is running";
    //     }
    // }

    // $dog = new Animal("Rambo");
    // $dog->run();\

    //Inheritance

//     class Animal 
//     {
        
//         public function __construct(protected $name) {
            
//         }

//         public function run() {
//             echo "$this->name is running...";
//         }
            
//     }

//    class Dog extends Animal
//    {
//         public function bark() {
//             echo "Woof... Woof...";
//         }
//    }

//    $gogo = new Dog("GOGO");
//    $gogo->run();
//    $gogo->bark();

   //Cannot use Multi Inheritence but

//    class Animal 
//    {
//     static function info() 
//     {
//         echo "Animal Class";
//     }
//    }

//    class Dog extends Animal 
//    {

//    }

//    class Fox extends Dog
//    {

//    }

//    Fox::info();

   //Override

//    class Animal
//    {
    

//     public function __construct(protected $name) {
        
//     }

//    }

//    class Dog extends Animal
//    {
//     private $color;

//     public function __construct($name, $color) {
//         parent::__construct($name);
//         $this->color = $color;
//     }

//     public function profile() {
//         echo "$this->name has $this->color color.";
//     }
//    }

//    $bobby = new Dog("Bobby", "brown");
//    $bobby->profile();

    //Cannot Override (Use final)

    // final class Animal
    // {
    //     final public function run()
    //     {
    //          echo "Animal is running...";
    //     }
    // }

    // class Dog extends Animal{
        
    //     public function run() {
    //         echo "The dog is running...";
    //     }
    // }

    // $gogo = new Dog;
    // $gogo->run();

    //Abstract Class(can write abstract method and normal method)

    // abstract class Animal
    // {
    //     public abstract function talk();

    //     public function run()
    //     {
    //         echo "Running...";
    //     }
    // }

    // class Dog extends Animal
    // {
    //     public function talk() {
    //         echo "Woof.. Woof";
    //     }

    // }

    // $gogo = new Dog;
    // $gogo->talk();


    //Interface(can only write abstract mehtod)

    // class Dog
    // {
    //     public function run()
    //     {
    //         echo "The dog is running";
    //     }
    // }

    // class Fish
    // {
    //     public function swim()
    //     {
    //         echo "The fish is swimming";
    //     }
    // }

    // function app(Dog $obj) {

    // }

    // app(new Dog);
    // app(new Fish);

    // interface Animal
    // {
    //     public function move();  //this is abstract method
    // }

    // class Dog implements Animal
    // {
    //     public function move() {
    //         echo 'The dog is running';
    //     }
    // }

    // class Fish implements Animal
    // {
    //     public function move() {
    //         echo "The fish is swimming";
    //     }
    // }

    // function app(Animal $obj) {
    //     $obj->move();
    // }

    // app(new Dog);
    // app(new Fish);

    //Multiple Interface

    // interface Animal
    // {
    //     public function move();

    // }

    // interface Livestock
    // {
    //     public function isFriendly();
    // }

    // class Cow implements Animal, Livestock
    // {
    //     public function move()
    //     {
    //         echo "The cow is walking";
    //     }

    //     public function isFriendly() {
    //         return true;
    //     }
    // }

    //Traits (Instead of Multiple Inheritence)

    // trait Math
    // {
    //     public function add($a, $b)
    //     {
    //         echo $a + $b;
    //     }
    // }

    // trait Area
    // {
    //     private $PI = 3.14;

    //     public function circle($r) {
    //         echo $this->PI * $r *$r;

    //     }
    // }

    // class Calculator
    // {
    //     use Math, Area;
    // }

    // $calc = new Calculator;
    // $calc->add(2, 3);
    // $calc->circle(3);

    //Class Constant // static member :: Double Colon Operator

   
    // class Area
    // {
    //  const PI = 3.14;
    //  public function circle($r)
    //  {
    //  echo self::PI * $r * $r;
    //  }
    // }
    
    // echo Area::PI; 

    // $circle = new Area;
    // $circle->circle("2");
    // class Animal
    // {
    //     public $name;
    //     public $color;

    //     public function eat() {
    //         echo "<h1>Eat!</h1>";
    //     }
    // }

    // class Dog extends Animal
    // {
    //     public function bark() {
    //         echo "<h1>Woof!</h1>";
    //     }
    // }

    // class Cat extends Animal
    // {
    //     public function meow() {
    //         echo "<h1>Meow!</h1>";
    //     }
    // }

    // $dog = new Dog();
    // $dog->name = "Aung Net";
    // $dog->eat();
    // $dog->bark();

    // $cat = new Cat();
    // $cat->name = "Shwe War";
    // $cat->eat();
    // $cat->meow();

    // abstract class Animal
    // {
    //     public abstract function talk();

    //     public function run() {
    //         echo "Running...";
    //     }
    // }

    // class Dog extends Animal
    // {
    //     public function talk() {
    //         echo "Yes, talk";
    //     }
    // }

    // $dog = new Dog();
    // $dog->talk();

    // interface Animal
    // {
    //     public function move();
    // }

    // class Fish implements Animal
    // {
    //     public function move() {
    //         echo "The Fish is swimming";
    //     }
    // }

    // class Bird implements Animal
    // {
    //     public function move() {
    //         echo "The Bird is flying";
    //     }
    // }

    // function app(Animal $obj) {
    //     $obj->move();
    // }

    // app(new Fish());
    // app(new Bird());

    declare(strict_types = 1);

    // class Animal 
    // {
    //     public $name;

    //     public function __construct(String $name) {
    //         $this->name = $name;
    //     }

    // }

    // $dog = new Animal("GPP");
    // echo $dog->name;

    // class Animal
    // {
    //     public static $type = "Mammal";

    //     static function info() {
    //         echo "self::$type";
    //     }
    // }

    // echo Animal::$type;

    // class Animal 
    // {
    //     public static $type = "Mammal";

    //     public static function info() {
    //         echo "Group: ".self::$type;
    //     }
    // }

    // echo Animal::$type;
    // Animal::info();

    // class Animal 
    // {
    //     private $name;

    //     public function __construct($name) {
    //         $this->name = $name;
    //     }

    //     public function run() {
    //         echo "$this->name is running";
    //     }
    // }

    // $dog = new Animal("GOGO");
    // $dog->run();

    //Constructor property promotion

    // class Animal
    // {
    //     public function __construct(private $name) {

    //     }

    //     public function run() {
    //         echo "$this->name is running";
    //     }
    // }

    // $dog = new Animal("GOGO");
    // $dog->run();
    // class Animal 
    // {     

    //     public function __construct(protected $name) {

    //     }
    // }

    // class Bird extends Animal
    // {
    //     public function fly() {
    //         echo "$this->name is flying";
    //     }
    // }

    // $bird = new Bird("FOFO");
    // $bird->fly();

    // class Animal
    // {
    //     static function info() {
    //         echo "Animal Class";
    //     }
    // }

    // class Dog extends Animal
    // {

    // }

    // class Fox extends Dog
    // {

    // }

    // Fox::info();

    //Override

    // class Animal
    // {
    //     public function __construct(protected $name) {
            
    //     }
    // }

    // class Dog extends Animal
    // {
    //     public function __construct($name, protected $color) {
    //         parent::__construct($name);
    //     }

    //     public function profile() {
    //         echo "$this->name has $this->color color.";
    //     }
    // }

    // $dog = new Dog("GOG", "Brown");
    // $dog->profile();

    // abstract class Animal {
        
    //     public abstract function talk();

    //     public function run() {
    //         echo "Running...";
    //     }
    // }

    // class Dog extends Animal
    // {
    //     public function talk() {
            
    //     }
    // }

    // interface Animal
    // {
    //     public function move();
    // }

    // class Dog implements Animal
    // {
    //     public function move() {
    //         echo "The dog is moving";
    //     }
    // }

    // class Cat implements Animal
    // {
    //     public function move() {
    //         echo "The cat is moving";
    //     }
    // }

    // function app(Animal $obj) {
    //     $obj->move();
    // }

    // app(new Dog);
    // app(new Cat);

    // interface Animal
    // {
    //     public function move();
    // }

    // interface Livestock
    // {
    //     public function isFriendly();
    // }

    // class Cow implements Animal, Livestock
    // {
    //     public function move() {

    //     }

    //     public function isFriendly(){
            
    //     }
    // }

    //Traits //Multiple Inheritence //use Statement

    // trait Math
    // {
    //     public function add($a, $b)  {
    //         echo $a + $b;
    //     }
    // }

    // trait Area
    // {
    //     public function circle($r) {
    //         echo PI() * $r * $r;
    //     }
    // }

    // class Calculator
    // {
    //     use Math, Area;

    // }

    // $calc = new Calculator;
    // $calc->add(2, 3);
    // $calc->circle(3);

    //Class COnstant // static member

//     class Area
// {
//  const PI = 3.14;
//  public function circle($r)
//  {
//  echo Area::PI * $r * $r;
//  }
// }

//     $calc = new Area;
//     $calc->circle(3);

//     echo Area::PI;

//Magic Methods

// class Math
// {
//     public function __call($name, $args) {
//         echo "Method $name doesn't exit";
//     }

//     static function __callStatic($name, $args) {
//         echo "Static method $name doesn't exit";
//     }

//     public function __invoke() {
//         echo  "This is not a function";
//     }
// }

// $obj = new Math;
// $obj->add();

// Math::add();

// $obj();

// class Math
// {
//     private $PI = 3.14;

//     public function __get($name) {
//         return $name
//     }

//     public function __set($name, $value) {
//         echo "Cannot set $name with $value";
//     }

//     public function __toString() {
//         return "PI = $this->PI";
//     }
// }

// $obj = new Math;

// echo $obj->PI;
// $obj->name = 3;

// class Student {
//     private $firstname;
//     private $gender;
   
//     public function getFirstName() {
//         return $this->firstname;
//     }
   
//     public function setFirstName($firstname) {
//         $this->firstname = $firstname;
//         echo("First name is set to ".$firstname);
//         echo("<br>");
//     }
   
//     public function getGender() {
//         return $this->gender;
//     }
   
//     public function setGender($gender) {
//         if ('Male' !== $gender and 'Female' !== $gender) {
//             echo('Set gender as Male or Female for gender');
//         }
   
//         $this->gender = $gender;
//         echo("Gender is set to ".$gender);
//         echo("<br>");
//     }
// }
   
// $student = new Student();
// $student->setFirstName('Meena');
// $student->setGender('Female');
// $firstname = $student->getFirstName();
// echo $firstname;

// class User
// {
//     private $gender;

//     public function getGender()
//     {
//         return $this->gender;
//     }

//     public function setGender($gender) {
//         $this->gender =  $gender;
//     }



// }

// $user = new User;
// $user->setGender("Female");

// echo $user->getGender();

// class Rectangle
// {
//     protected $width;
//     protected $height;

//     public function __construct($width, $height) {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function area() {
//         return $this->width * $this->height;
//     }
// }

// class square extends Rectangle
// {   
//     public function show() {
//         echo "width : $this->width";
//     }
// }


// // $sq = new square();
// // $sq->show();
// $a = new square(height: 3, width: 6);
// $a->show();

// class Fruit
// {
//     protected $name;
//     protected $color;

//     public function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     protected function intro() {
//         echo "$this->name and $this->color";
//     }
// }

// class Banana extends Fruit
// {   
//     //Overriding
//     private $weight;

//     public function __construct($name, $color, $weight) {
//         parent::__construct($name, $color);
//         $this->weight = $weight;
//     }
//     public function message() {
//         echo "What is this fruit?";
//         echo "<br>";
//         $this->intro();
//     }

//     public function intro() {
//         echo  "$this->name, $this->weight and $this->color";
//     }
// }

// $banana = new Banana("Banana", "Yellow", "1kg");
// $banana->message();

// abstract class Base 
// {
//     function __construct() {
//         echo "this is abstract class constructor";
//     }

//     abstract function printdata();
// }

// class Derived extends Base 
// {
//     function __construct() {
//         echo "\n Derived class constructor";
//     }

//     function printdata() {
//         echo "\n Derived class printdata function";
//     }

// }

// $b1 = new Derived;
// $b1->printdata();

//Polymorphism
// interface InputBox
// {
//     public function setValue($val);
//     public function showValue();
//     // public function resize($width, $height); 


// }

// class TextBox implements InputBox
// {
//     private $value;

//     public function setValue($val) {
//         $this->value = $val;
//     }

//     public function showValue() {
//         echo $this->value;
//     }
// }

// class PasswordBox implements InputBox
// {
//     private $value;

//     public function setValue($val) {
//         $this->value = $val;
//     }

//     public function showValue() {
//         echo $this->value;
//     }
// }

// $textBox = new TextBox;
// $passwordBox = new PasswordBox;
// $textBox->setValue(1);
// $textBox->showValue();
// $passwordBox->setValue(2);
// $passwordBox->showValue();

//Error Handling

//Exception Handling

// function add($nums) {
//     if(!is_array($nums)) {
//         throw new Exception("Argument must be array");
//     }

//     return array_sum($nums);
// }

// try {
//     echo add(1);
// } catch(Exception $e) {
//     echo $e->getMessage();
// } finally {
//     echo "Done";
// }






?>

