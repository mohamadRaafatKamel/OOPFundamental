<?php

namespace DesignPatterns\Creational\Prototype;

use PHPUnit\Framework\TestCase;

class prototypeTest extends TestCase
{
    public function testCanGetMangaBook()
    {
        $MangaPrototype = new MangaBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $MangaPrototype;
            $book->setTitle('Manga Book No ' . $i);
            $this->assertInstanceOf(MangaBookPrototype::class, $book);
        }
    }
}
