<?php

declare(strict_types=1);

interface HTMLInterface
{
    const version = 5;
    public function getHTML(): string;
}