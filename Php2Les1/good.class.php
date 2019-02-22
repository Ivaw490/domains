<?php

class good{
    private $name;
    private $type;
    private $price;
    private $description;
    private $amount = 0;

    function __construct($name, $type, $price, $description, $amount)
    {
        $this->setName($name);
        $this->setType($type);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setAmount($amount);
    }

    function setName($name){
        $this->name = $name;
    }
    function setType($type){
        $this->type = $type;
    }
    function setPrice($price){
        $this->price = $price;
    }
    function setDescription($description){
        $this->description = $description;
    }
    function setAmount($amount){
        $this->amount = $amount;
    }
    function getName(){
        return $this->name;
    }
    function getType(){
        return $this->type;
    }
    function getPrice(){
        return $this->price;
    }
    function getDescription(){
        return $this->description;
    }
    function getAmount(){
        return $this->amount;
    }
    function viewGoodInfo(){
        echo "Наименование: " . $this->getName() . "<br>" .
             "Тип: ". $this->getType() . "<br>" .
             "Цена: " . $this->getPrice() . "<br>" .
             "Описание: " . $this->getDescription() . "<br>" .
             "Кол-во: " . $this->getAmount() . "шт." . "<br>";
    }
}
/*Задание 5---------------------------------------------
    class A {
        public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    $a1 = new A();
    $a2 = new A();
    $a1->foo(); выведет 1 (не 0, потому что преинкремент: сначала увеличивается, потом выводится)
    $a2->foo(); выведет 2
    $a1->foo(); выведет 3
    $a2->foo(); выведет 4
    потому что значение $x запоминается т.к. static

Задание 6---------------------------------------------
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); выведет 1
$b1->foo(); выведет 1
$a1->foo(); выведет 2
$b1->foo(); выведет 2
потому что a и b экземпляры разных классов, и $x у каждого своя (статические свойства и методы принадлежат классам, а не
их экземплярам)

Задание 7*---------------------------------------------
class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); выведет 1
$b1->foo(); выведет 1
$a1->foo(); выведет 2
$b1->foo(); выведет 2
результат будет такой же как и в задании 6, отличия только в отсутствии () после объявлении экземпляров класса,
а это относится только к конструктору, с параметрами он или нет, здесь его нет, так что можно и без (), все остальное
такое же => результат такой же
*/
