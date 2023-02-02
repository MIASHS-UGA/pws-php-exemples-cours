<?php
class A
{
    public static function appelerQuiEstCe(){
        static::quiEstCe();
    }
    public static function quiEstCe(){
        echo 'A';
    }
}
class B extends A
{
    public static function test(){
        // parent::quiEstCe();
        parent::appelerQuiEstCe();
    }
    public static function quiEstCe(){
        echo 'B';
    }
}
class C extends B
{
    public static function quiEstCe(){
        echo "C \n";
    }
}
C::test();
?>
