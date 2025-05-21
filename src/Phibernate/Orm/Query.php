<?php declare(strict_types=1);
/**
 * Class representing generic query functionality
 *   
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Phibernate
 * @package 
 * @version 0.1
 * @since 2025-05-07
 */
namespace Phibernate\Orm;

class Query
{
    protected $command =  'SELECT';
    protected string $relation='';

    public function __construct(protected array $tuple = ['*'])
    {
        
    }

    public function where($condition)
    {}

    public function from(string $relation)
    {
        $this->relation = $relation;
    }

    public function __toString()
    {
        return implode(' ', [
            $this->command,
            implode(', ', $this->tuple),
            'FROM',
            $this->relation
        ]);
    }
    
}