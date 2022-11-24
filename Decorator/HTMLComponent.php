<?php

declare(strict_types=1);

class HTMLComponent implements HTMLInterface
{
    private const text = 'HTML TEXT';
    public function getHTML(): string
    {
        return self::text;
    }
}