<?php

class Animal{
    public $name='animal';
    protected $age=12;
    private $weight=20;
//  建構子__construct()，實例化
public function __construct($name)
    {
        // =是指定運算子不是等於
        $this->name = $name;
    }

public function run()
   {
    echo $this->name;
    echo " is running ";
   }

private function speed()
   {
    return 'high speed';
   }

}

class Cat extends Animal
{
    public $name='cat';

    public function run()
   {
    echo "cat is running";
    echo $this->speed();
    echo $this->age;
   }

   private function speed()
   {
    return 'low speed';
   }
}

// 上述為規劃書，下面才是物件導向的內容
// 設定一個物件

$cat = new Animal('john');
$cat->run();
$dog = new Animal('Tom');
$dog->run();
// $cat = new Cat();

// echo $cat->name;
// echo $cat->run();
// echo $cat->speed();
// echo $cat->weight;


?>