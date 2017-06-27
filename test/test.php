<?php

class Animal
{
    public $name;
    
    public function Greet()
    {
        return "Hello, I'm some sort of animal and my name is " . $this->name;
    }
}


class Dog extends Animal
{
    public function Greet()
    {
        return "Hello, I'm a dog and my name is " . $this->name;
    }
}

$animal = new Animal();
echo $animal->Greet();
$animal = new Dog();
$animal->name = "Bob";
echo $animal->Greet();
echo "<br/>";




$str = "My Name is Fred";
$arr = explode(' ', $str);
print_r($arr);
echo count($arr);
for($i=(count($arr)-1); $i>=0;$i--)
{
          print $arr[$i].' ';
}

echo "<br/>";

$string = 'harish';
$count = strlen($string);
for ($i=($count-1); $i >= 0; $i--) { 

	print $string[$i];
}

?>