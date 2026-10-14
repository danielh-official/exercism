<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        $initial = ucfirst($this->firstLetter($name));
        
        return "$initial.";
    }

    public function initials(string $name): string
    {        
        $array = explode(" ", $name);

        $first = $array[0] ?? "";
        $second = $array[1] ?? "";

        return "{$this->initial($first)} {$this->initial($second)}";
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $a = $this->initials($sweetheart_a);
        $b = $this->initials($sweetheart_b);

$heart = <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     %s  +  %s     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;

        return sprintf(
            $heart,
            $this->initials($sweetheart_a),
            $this->initials($sweetheart_b)
        );
    }
}
