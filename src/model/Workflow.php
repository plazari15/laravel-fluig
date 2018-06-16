<?php

namespace Plazari15\LaravelFluig\Model;

use Plazari15\LaravelFluig\Model\ConstraintType;

class Workflow
{
    public  $processInstanceId;
    public $stateSequence;
    public $threadSequence;
    public $observation;

    public function __construct($processInstance = '', $stateSequence = '', $threadSequence = '', $observation = ''){
        $this->processInstanceId = $processInstance;
        $this->stateSequence = $stateSequence;
        $this->threadSequence = $threadSequence;
        $this->observation = $observation;
    }

}