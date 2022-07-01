<?php

class User {

    private $name;
    private $life;
    private $attack;

    public function __construct($name, $attack, $life) {
        $this->name = $name;
        $this->attack = $attack;
        $this->life = $life;
    }

    public function getName() {
        return $this->name;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function getLife() {
        return $this->life;
    }

    public function setAttack($attack) {
        $this->attack = $attack;
    }

    public function setLife($life) {
        $this->life = $life;
    }

    public function kill() {
        $this->life = null;
    }
}