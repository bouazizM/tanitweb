<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/01/2018
 * Time: 19:47
 */

namespace AppBundle\Entity;


class Tag
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}