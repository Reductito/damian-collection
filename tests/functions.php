<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;

class functions extends TestCase {
    public function testIsStringDisplayAlbums() {
        $albums = [
            [
                'image-link' => 'blskdjfldksjf',
                'name' => 'test',
                'release-year' => '1999',
                'artist' => 'blah blah',
                'genre' => 'music',
                'record-label' => 'pow'
            ],
        ];
        $case = displayAlbums($albums);
        $this->assertIsString($case);
    }

    public function testMalformedDisplayAlbums()
    {
        $input = 3;
        $this->expectException(TypeError::class);
        displayAlbums($input);
    }

    public function testFailureDisplayAlbums() {

        $input = [];
        $expected = 'ERROR ERROR ERROR';
        $case = displayAlbums($input);
        $this->assertEquals($expected, $case);
    }
}
