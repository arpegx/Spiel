<?php declare(strict_types=1);

class Einheit
{
    private int $shield;
    private int $health;

    public function __construct(){}

    public function hit(int $points): void {}
    public function loadShield(int $points): void {}
}