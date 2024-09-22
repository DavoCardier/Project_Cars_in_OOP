<?php 
declare(strict_types=1); 
namespace Psyco;

use Psyco\Vehicle;

interface InterfaceTesla
{
    public function charge(): bool;
    public function move(): void;
}

class Tesla extends Vehicle implements InterfaceTesla
{
    public bool $isCharge = false;

    function __constructo(): bool
    { 
        $this->isCharged = rand(1,0) > 0;
    }
      public function charge(): bool
    {
        if ($this->isCharged = false) {
            echo "Tesla charged successfully!\n";
        } else {
            echo "Tesla needs to be charged first.";
         }
    }

    public function move(): void
    {
        if ($this->isCharged = 1) {
            echo "The Tesla is moving electrically with a speed of $this->speed km/h.\n";
        } else $this->ischange = 0; {
            echo "Tesla needs to be charged first.";
        }
    }
}