<?php

namespace OOPFundamental\DesignPatterns\Creational\pool;

use DateTime;

class Worker
{
    private DateTime $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}
