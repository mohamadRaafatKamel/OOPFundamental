<?php


namespace DesignPatterns\Creational\Prototype;


class ComicBookPrototype extends BookPrototype
{
    protected string $category = 'Comic';

    public function __clone()
    {
    }
}
