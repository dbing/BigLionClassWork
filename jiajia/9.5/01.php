<?php
 header("Content-type: text/html; charset=utf-8");
/**
* 面向对象：更灵活、扩展性
*   类：有相同的属性和和方法的事务的集合，抽象
*   对象：具体的一个事物，是类实例化的结果
* 面向对象的三大特性：封装（信息隐藏）、继承（重用）、多态（灵活）
*/
 //类：class定义 类名大写
 class Person
 {
    //属性
    public $name;
    public $sex;
    //方法
    public function cry()
    {
        echo 'aa';
    }
 }
 //实例化类
 $one=new Person;
 $one->name='jj';//调用属性
 $one->sex='女';//调用方法
 $one->cry();
 var_dump($one);
?>