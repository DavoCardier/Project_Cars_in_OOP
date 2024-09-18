<?php 
declare(strict_types=1); 
namespace iPsyco;

use iPsyco\Vehicle;

class Tesla extends Vehicle
{
    private bool $isCharged = false;

    public function charge(): void
    {
        $this->isCharged = true;
        echo "Tesla charged successfully!\n";
    }

    public function move(): void
    {
        if ($this->isCharged) {
            echo "The Tesla is moving electrically with a speed of $this->speed km/h.\n";
        } else $this->ischange = False; {
            echo "Tesla needs to be charged first.";
        }
    }
}