# Phibernate
Data mapper (ORM, XML etc.) in PHP 8.4+

## Usage examples


```php
use Phibernate\Orm\Entity\Relation;
use Phibernate\Orm\Query;


$q = new Query(['id', 'last', 'first', 'dob']);
$q->from('person');

$foo = new Relation('person');
$foo->c->first = 'Sven';
$foo->c->last = 'Schrodt';
$foo->c->dob =  DateTime::createFromFormat('Y-m-d' ,'1970-12-09');
```

