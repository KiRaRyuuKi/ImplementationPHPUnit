<?php

use PHPUnit\Framework\TestCase;

// Impor kelas PHPTestCase
require_once 'PHPTestCase.php';

class PHPUnitTest extends TestCase
{
    public function testSingleWord()
    {
        // Pengujian jika hanya ada satu kata
        $caseTesting = new PHPTestCase(); // Membuat objek PHPTestCase
        $value = $caseTesting->testCase("Hello"); // Memanggil metode testCase dengan argumen "Hello"

        $this->assertEquals(1, $value); // Memastikan bahwa metode mengembalikan 1 (jumlah kata yang diharapkan)
    }

    public function testExample()
    {
        // Gunakan kelas PHPTestCase untuk menghitung kata-kata
        $caseTesting = new PHPTestCase(); // Membuat objek PHPTestCase
        $value = $caseTesting->testCase("My Name is KiRa"); // Memanggil metode testCase dengan argumen kalimat

        $this->assertEquals(4, $value); // Memastikan bahwa metode mengembalikan 4 (jumlah kata yang diharapkan)
    }

    public function testEmptySentence()
    {
        // Pengujian jika kalimat kosong
        $caseTesting = new PHPTestCase(); // Membuat objek PHPTestCase
        $value = $caseTesting->testCase(""); // Memanggil metode testCase dengan string kosong

        $this->assertEquals(0, $value); // Memastikan bahwa metode mengembalikan 0 (jumlah kata yang diharapkan)
    }

    public function testMultipleSpaces()
    {
        // Pengujian jika ada banyak spasi di antara kata-kata
        $caseTesting = new PHPTestCase(); // Membuat objek PHPTestCase
        $value = $caseTesting->testCase("   This   is   a   TestCase   "); // Memanggil metode testCase dengan kalimat yang mengandung banyak spasi

        $this->assertEquals(4, $value); // Memastikan bahwa metode mengembalikan 4 (jumlah kata yang diharapkan)
    }
}
