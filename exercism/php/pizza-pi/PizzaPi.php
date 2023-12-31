<?php

class PizzaPi
{
    
    public function calculateDoughRequirement($pizzas, $people)
    {
        return ($pizzas * (($people * 20) + 200));
    }

    public function calculateSauceRequirement($pizzas, $sauce_volume)
    {
        return (($pizzas * 125) / $sauce_volume);
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $diameter)
    {
        return (int) (($cheese_dimension**3) / ($thickness * pi() * $diameter));
    }

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return (($pizzas * 8) % $friends);
    }
}
