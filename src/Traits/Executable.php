<?php

namespace Cesarcorreia\Executable\Traits;

trait Executable
{
    public static function execute(...$args): self
    {
        $action = new self(...$args);
        $action->handle();

        return $action;
    }
}