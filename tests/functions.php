<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;

class functions extends TestCase {
    public function testIsStringDisplayAlbums() {
        $albums = [
            [
                'image-link' => 'thingy.png',
                'name' => 'test',
                'release-year' => '1999',
                'creator' => 'blah blah',
                'genre' => 'music',
                'record-label' => 'pow'
            ],
        ];

        $expected = '<div class="album"><img src="thingy.png" alt ="album cover" /><p>test</p>' .
            '<p>Creator - blah blah</p>' .
            '<p>Released 1999</p>' .
            '<p>Genre - music</p>' .
            '<p>Label - pow</p></div>';

        $case = displayAlbums($albums);
        $this->assertEquals($case, $expected);
        $this->assertIsString($case);
    }

    public function testMalformedDisplayAlbums() {
        $input = 3;
        $this->expectException(TypeError::class);
        displayAlbums($input);
    }

    public function testFailureDisplayAlbums() {

        $input = [];
        $expected = 'Error - cannot display albums. Please try again later.';
        $case = displayAlbums($input);
        $this->assertEquals($expected, $case);
    }

    public function testSuccessSafeArray() {
        $post['name'] = '<';
        $expected = ['name' => '&lt;'];
        $case = safeArray($post);
        $this->assertEquals($case, $expected);
    }

    public function testMalformedSafeArray() {
        $safearray = 5;
        $this->expectException(TypeError::class);
        safeArray($safearray);
    }

    public function testFailureSafeArray() {
        $input = [];
        $expected = ['Please fill out all fields correctly.'];
        $case = safeArray($input);
        $this->assertEquals($expected, $case);
    }

    public function testSuccessCheckString() {
        $albums = ['name' => 'test', 'release-year' => '1999'];
        $expected = true;
        $case = checkString($albums);
        $this->assertEquals($case, $expected);
    }

    public function testMalformedCheckString() {
        $albums = 3;
        $this->expectException(TypeError::class);
        checkString($albums);
    }

    public function testFailureCheckString() {
        $albums = ['name' => 'test', 'release-year' => '409534'];
        $expected = false;
        $case = checkString($albums);
        $this->assertEquals($case, $expected);
    }

}
