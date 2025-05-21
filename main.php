<?php

require_once 'src/Phibernate/Bootstrap.php';

use Phibernate\Orm\Entity\Relation;
use Phibernate\Orm\Query;


$q = new Query(['id', 'last', 'first', 'dob']);
$q->from('person');
print($q);



exit(23);
$foo = new Relation('person');
$foo->c->first = 'Sven';
$foo->c->last = 'Schrodt';
$foo->c->dob =  DateTime::createFromFormat('Y-m-d' ,'1970-12-09');

print_r($foo);


print_r($foo->c->last);
var_dump($foo->c->keys());

print($foo->c);