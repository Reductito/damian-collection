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
        $albums = [
            [
                'image-link' => 'thing.jpg',
                'name' => 'test',
                'release-year' => '2000',
                'artist' => 'blah blah',
                'genre' => 'music',
                'record-label' => 'pow'
            ],
        ];

        $expected = '<div class="album"><img src="thing.jpg" alt ="album cover" /><p>test</p>' .
            '<p>Creator - blah blah</p>' .
            '<p>Released 1999</p>' .
            '<p>Genre - music</p>' .
            '<p>Label - pow</p></div>';

        $case = displayAlbums($albums);

        $this->assertEquals($expected, $case);
    }
}