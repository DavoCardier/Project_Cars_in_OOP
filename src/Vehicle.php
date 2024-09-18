<?php
declare(strict_types=1); 
namespace iPsyco;

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

    public function setSpeed(float $speed): void
    {
        $this->speed = $speed;
    }
    
    public function getModel(): string
    {
        return $this->model;
    }
}
