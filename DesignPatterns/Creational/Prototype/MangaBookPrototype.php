<?php

namespace DesignPatterns\Creational\Prototype;


class MangaBookPrototype extends BookPrototype
{
    protected string $category = 'Manga';

    public function __clone()
    {
    }
}
