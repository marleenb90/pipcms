<?php
/**
 * Created by PhpStorm.
 * User: marleen
 * Date: 05/05/2018
 * Time: 23:08
 */

namespace Domain;


class Author
{
    /**
     * @var string
     */
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getAuthorName()
    {
        return $this->name;
    }
}