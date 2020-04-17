<?php

namespace models;
use Medoo\Medoo;

class BaseModels extends  Medoo{
    public function __construct(array $options)
    {
        $options=[];
        parent::__construct($options);
    }
}