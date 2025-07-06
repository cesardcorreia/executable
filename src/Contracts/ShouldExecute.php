<?php

namespace Contracts;

interface ShouldExecute
{
    public function handle(): self;
}