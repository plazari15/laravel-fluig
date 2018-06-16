<?php

namespace Plazari15\LaravelFluig\Model;

class Dataset
{
    public $name;
    public $listFields =null;
    public $listConstraints = null;
    public $order = null;

    public function setName($n){
        $this->name = $n;
    }

    public function addField($field){
        array_push($this->listFields, $field);
    }

    public function addConstraint($constraint){
        array_push($this->listConstraints, $constraint);
    }

    public function addOrder($order){
        array_push($this->order, $order);
    }
}