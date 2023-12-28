<?php

declare(strict_types=1);

class Lasagna
{
    private $cookTime = 40;

    // Please define the 'expectedCookTime()' function
    public function expectedCookTime()
    {
        return $this->cookTime;
    }

    // Please define the 'remainingCookTime($elapsed_minutes)' function
    public function remainingCookTime($elapsed_minutes)
    {
        return $this->cookTime - $elapsed_minutes;
    }

    // Please define the 'totalPreparationTime($layers_to_prep)' function
    public function totalPreparationTime($layers_to_prep)
    {
        return $layers_to_prep * 2;
    }

    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        $preparationTime = $this->totalPreparationTime($layers_to_prep);
        return $preparationTime + $elapsed_minutes;
    }

    // Please define the 'alarm()' function
    public function alarm()
    {
        return "Ding!";
    }
}
