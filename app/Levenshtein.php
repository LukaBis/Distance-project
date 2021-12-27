<?php

namespace App;

class Levenshtein
{
    function __construct(private string $s1, private string $s2)
    {
    }

    /**
    * calculates the levenshtein distance i.e. measures the minimum number of
    * changes required to convert one string into the other
    *
    * @return int
    */
    public function levenshtein_dis(): int {
        return levenshtein($this->s1, $this->s2);
    }

    public static function main(): int {
        $levenshtein = new Levenshtein("this is a test",  "this is test");
        $distance = $levenshtein->levenshtein_dis();
        return $distance;
    }

}

//echo Levenshtein::main();
