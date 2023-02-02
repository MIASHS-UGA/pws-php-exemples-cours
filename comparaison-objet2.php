<?php
class A
{
  public $attribut1;
  public $attribut2;
}

$a = new A;
$a->attribut1 = 'Hello';
$a->attribut2 = 'Salut';

$b = new A;
$b->attribut1 = 'Hello';
$b->attribut2 = 'Salut';

$c = $a;

if ($a === $b)
{
  echo '$a === $b';
}
else
{
  echo '$a !== $b';
}

echo "\n";

if ($a === $c)
{
  echo '$a === $c';
}
else
{
  echo '$a !== $c';
}

echo "\n";
