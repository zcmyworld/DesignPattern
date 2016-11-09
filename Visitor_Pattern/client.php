<?php
//　计算价格的程序

//逻辑与属性分离

require_once "./Macbook.php";

require_once "./PlusDiscount.php";

require_once "./SubDiscount.php";

$macbook = new Macbook();

$rs = $macbook->accept(new PlusDiscount());

echo $rs . "\n";

$macbook = new Macbook();

$rs = $macbook->accept(new SubDiscount());

echo $rs . "\n";

//class A
//{
//    private $hello = null;
//
//    public function getHello()
//    {
//        return $this->hello;
//    }
//
//    public function setHello($hello)
//    {
//        $this->hello = $hello;
//    }
//
//    public function accept($b)
//    {
//        $b->dosth($this);
//    }
//}
//
//class B
//{
//    //为什么不通过继承来重写呢？
//    public function dosth($a)
//    {
//        $numA = $a->getHello();
//        $rs = $numA + 10;
//        $a->setHello($rs);
//    }
//}
//
//$a = new A();
//$a->setHello(12);
//$a->accept(new B());
//
//echo $a->getHello();
//echo "\n";