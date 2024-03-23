<?php

declare(strict_types=1);

namespace Potter\Cloneable;

interface CloneableInterface
{
    public function getClone(): CloneableInterface;
}