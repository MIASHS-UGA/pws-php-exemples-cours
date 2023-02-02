<?php
class A
{
  public $attribut1;
  public $attribut2;
}

class B
{
  public $attribut1;
  public $attribut2;
}

$a = new A;
$a->attribut1 = 'Hello';
$a->attribut2 = 'Salut';

$b = new B;
$b->attribut1 = 'Hello';
$b->attribut2 = 'Salut';

$c = new A;
$c->attribut1 = 'Hello';
$c->attribut2 = 'Salut';


if ($a == $b)
{
  echo '$a == $b';
}
else
{
  echo '$a != $b';
}

echo "\n";

if ($a == $c)
{
  echo '$a == $c';
}
else
{
  echo '$a != $c';
}

echo "\n";
