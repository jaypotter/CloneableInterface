<?php

declare(strict_types=1);

namespace Potter\Cloneable;

abstract class AbstractCloneable implements CloneableInterface
{
    abstract public function getClone(): static;
    abstract protected function with(string $id, mixed $entry): static;
    abstract protected function without(string $id): static;
}