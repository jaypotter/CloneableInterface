<?php

declare(strict_types=1);

namespace Potter\Cloneable;

abstract class AbstractCloneable implements CloneableInterface
{
    abstract public function getClone(): CloneableInterface;
    abstract protected function with(string $id, mixed $entry): CloneableInterface;
    abstract protected function without(string $id): CloneableInterface;
}