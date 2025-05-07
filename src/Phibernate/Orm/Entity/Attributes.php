<?php declare(strict_types=1);
/**
 * Class representing a relation's attribute list
 *   
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Phibernate
 * @package 
 * @version 0.1
 * @since 2025-03-05-07
 */
namespace Phibernate\Orm\Entity;

class Attributes
{
    protected $props = [];

    protected $types = [];

    public function __set($name, $value)
    {
        $this->props[$name] = $value;
        $this->types[$name] = gettype($value);
        if(gettype($value) == 'object') $this->types[$name] = $value::class. ' ' .$this->types[$name];

    }


    public function __get($name)
    {
        return  $this->props[$name] ?? null;
    }


    public function keys(): array
    {
        return array_keys($this->props);
    }

    public function data(): array
    {
        return $this->props;
    }

    public function type($name): mixed
    {
        return $this->types[$name] ?? null;
    }

    
    public function __toString(): string
    {
        return str_replace(['array (', ')'], '', var_export($this->props, true));
        
    }
}