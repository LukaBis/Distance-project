<?php

class LevenshteinTest extends \PHPUnit\Framework\TestCase
{
    public function test1() {
        $levenshtein = new App\Levenshtein("dogs", "cats");
        $result = $levenshtein->levenshtein_dis();

        $this->assertEquals(3, $result);
    }

    public function test2() {
        $levenshtein = new App\Levenshtein("this is a test", "this is test");
        $result = $levenshtein->levenshtein_dis();

        $this->assertEquals(2, $result);
    }

    public function test3() {
        $levenshtein = new App\Levenshtein("this", "this");
        $result = $levenshtein->levenshtein_dis();

        $this->assertEquals(0, $result);
    }
}
