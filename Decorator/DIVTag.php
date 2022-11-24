<?php

declare(strict_types=1);

class DIVTag extends HTMLDecorator
{
    public function getHTML(): string
    {
        $this->tag = "DIV";
        return "<{$this->tag}>" . $this->hTMLInterface->getHTML() . "</{$this->tag}>";
    }
}