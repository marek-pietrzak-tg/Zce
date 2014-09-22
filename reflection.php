<?php
function addStars($message)
{
  return "** $message **";
}

$reflection = new ReflectionFunction('addStars');

var_dump($reflection->getName());
var_dump($reflection->getParameters());
var_dump($reflection->isUserDefined());
var_dump($reflection->getFileName());

/* foreach (get_class_methods($reflection) as $method) {
  echo $method . ":";
  var_dump($reflection->$method());
} */

class Robot
{
  public $name;

  public function __construct($name)
  {
      $this->name = $name;
  }

  public function sayHello()
  {
    return 'Hello ' . $this->name;
  }
}

$reflection = new ReflectionClass('Robot');

var_dump($reflection->getMethods());
var_dump($reflection->getProperties());
var_dump($reflection->newInstance('R2D2'));
