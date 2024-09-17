<?php
ini_set('declare(strict_types', '1'); 
namespace App;

abstract class Vehicle
{
    protected string $brand;
    protected string $model;
    protected float $speed;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = 0;
    }

    abstract public function move(): void;
}
