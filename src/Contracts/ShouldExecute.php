<?php

namespace CesarCorreia\Contracts;

interface ShouldExecute
{
    public function handle(): self;
}