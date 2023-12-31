<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $name = trim($name);
        return $name[0];
    }

    public function initial(string $name): string
    {
        $name = strtoupper($this->firstLetter($name));
        return "$name.";
    }

    public function initials(string $name): string
    {
        $names = explode(' ', $name);
        $initials_names = '';
        $names_len = count($names) - 1;
        for ($i = 0; $i <= $names_len; $i++)
        {
            $names[$i] = $this->initial($names[$i]);
            $initials_names = $initials_names . "$names[$i]";
            if ($i < $names_len)
                $initials_names = $initials_names . ' ';
        }
        return $initials_names;
    }

    function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $sweet_initial_a = $this->initials($sweetheart_a);
        $sweet_initial_b = $this->initials($sweetheart_b);
        $heart = <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $sweet_initial_a  +  $sweet_initial_b     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;
        return $heart;
    }
}
