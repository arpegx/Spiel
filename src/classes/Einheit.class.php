<?php declare(strict_types=1);

abstract class Einheit
{
    //* Variable
    protected int $shield;
    protected int $health;

    //* ctor
    public function __construct(){}

    //* Method
    public function hit(int $points): void {}
    public function loadShield(int $points): void {}

    //* Getter and Setter
    /**
     * Get the value of shield
     *
     * @return int
     */
    public function getShield(): int {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     * @param int $shield
     * 
     * @return self
     */
    public function setShield(int $shield): self {
        $this->shield = $shield;
        return $this;
    }

    /**
     * Get the value of health
     *
     * @return int
     */
    public function getHealth(): int {
        return $this->health;
    }
}

class Corsair extends Einheit
{
    //*ctor
    public function __construct(){
        $this->health = 150;
        $this->setShield(20);
    }
}