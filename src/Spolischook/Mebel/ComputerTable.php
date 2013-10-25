<?php

namespace Spolischook\Mebel;

class ComputerTable extends AbstractTable implements LiftableInterface
{
    public function __construct($color)
    {
        parent::__construct($color);
    }

    public function sitDown()
    {
        // TODO: Implement sitDown() method.
    }

    public function lift()
    {
        //Lift our table
    }

    public function toString()
    {
        return $this->getColor() . ' ComputerTable';
    }
}