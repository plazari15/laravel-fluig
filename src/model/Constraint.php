<?php

namespace Plazari15\LaravelFluig\Model;

use Plazari15\LaravelFluig\Model\ConstraintType;

class Constraint
{
    private $field;
    private $initialValue;
    private $finalValue;
    private $type;

    public function __construct($field = '', $iniValue = '', $finValue = '', $typeName = ''){
        $this->field = $field;
        $this->initialValue = $iniValue;
        $this->finalValue = $finValue;
        $this->setType($typeName);
    }

    public function setType($typeName){
        
        switch($typeName){
            case 'MUST':
                $this->type = ConstraintType::$MUST;
                break;
            case 'SHOULD':
                $this->type = ConstraintType::$SHOULD;
                break;
            case 'MUST_NOT':
                $this->type = ConstraintType::$MUST_NOT;
                break;
            default:
                $this->type = ConstraintType::$MUST;
        }
    }

}