<?php

class HammingTest extends \PHPUnit\Framework\TestCase
{
    public function test1() {
        $hamming = new App\Hamming("dogs", "cats");
        $result = $hamming->hamming_dis();

        $this->assertEquals(3, $result);
    }

    public function test2() {
        $hamming = new App\Hamming("this is a test", "this is test");
        $result = $hamming->hamming_dis();

        $this->assertEquals(6, $result);
    }

    public function test3() {
        $hamming = new App\Hamming("this", "this");
        $result = $hamming->hamming_dis();

        $this->assertEquals(0, $result);
    }
}
