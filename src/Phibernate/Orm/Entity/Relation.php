<?php declare(strict_types=1);
/**
 * Class representing instances of generic relations (aka table)
 *   
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Phibernate
 * @package 
 * @version 0.1
 * @since 2025-05-07
 */
namespace Phibernate\Orm\Entity;

class Relation
{
    public Attributes $c;

    public function __construct(protected string $name)
    {
        $this->c = new Attributes();
    }

    
   
}