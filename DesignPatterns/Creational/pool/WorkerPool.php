<?php

namespace OOPFundamental\DesignPatterns\Creational\pool;

use Countable;

class WorkerPool implements Countable
{
    private array $occupiedWorkers = [];
    private array $freeWorkers = [];

    public function get(): Worker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new Worker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(Worker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}

