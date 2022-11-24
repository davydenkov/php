<?php

declare(strict_types=1);

abstract class HTMLDecorator implements HTMLInterface
{
    protected $tag;

    public function __construct(protected HTMLInterface $hTMLInterface)
    {

    }
}