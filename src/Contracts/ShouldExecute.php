<?php

namespace Cesarcorreia\Executable\Contracts;

interface ShouldExecute
{
    public function handle(): self;
}