<?php

class Task {
    public $description;
    protected $completed = false;

    public function __construct ( $desc ) {
        $this->description = $desc;
    }

    public function complete () {
        $this->completed = true;
    }

    public function isComplete () {
        return $this->completed;
    }

}

$tasks = [
    new Task('Vaja käia poes'),
    new Task('Täida päevikud'),
    new Task('Osale rohekiirendis')
];

require_once 'index.view.php';