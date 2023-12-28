<?php

class Teste
{
    public static function assertEquals($a, $b)
    {
        if ($a === $b)
        {
            echo "<p style=\"color: green\">$b</p>";
            echo "<p style=\"color: green\">OK</p><br>";
        }
        else
        {
            echo "<p style=\"color=red\">$b</p>";
            echo "<p style=\"color=red\">FAIL</p><br>";
        }
    }

    public static function assertFalse($a, $b)
    {
        if ($a !== $b)
        {
            echo "<p style=\"color: green\">$b</p>";
            echo "<p style=\"color: green\">OK</p><br>";
        }
        else
        {
            echo "<p style=\"color=red\">$b</p>";
            echo "<p style=\"color=red\">FAIL</p><br>";
        }
    }
}
