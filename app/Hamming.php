<?php

namespace App;

class Hamming
{
    /**
    * @var int
    */
    private $number_of_subs;

    function __construct(private string $s1, private  string $s2)
    {
        // if one is shorter then other, pad with spaces until they have same length
        if (strlen($this->s1) > strlen($this->s2)) {
            while(strlen($this->s1) != strlen($this->s2)){
                $this->s2.=" ";
            }
        }

        if (strlen($this->s2) > strlen($this->s1)) {
            while(strlen($this->s1) != strlen($this->s2)){
                $this->s1.=" ";
            }
        }
    }

    /**
    * calculates the hamming distance i.e. measures the minimum number of
    * substitutions required to change one string into the other
    *
    * @return int
    */
    public function hamming_dis(): int {
        $this->number_of_subs = 0;

        for ($i = 0; $i < strlen($this->s1); $i++) {
            if ($this->s1[$i] != $this->s2[$i]) {
                $this->number_of_subs++;
            }
        }

        return $this->number_of_subs;
    }

    public static function main(): int {
        $haming = new Hamming("dogs", "cats");
        $distance = $haming->hamming_dis();
        return $distance;
    }

}
