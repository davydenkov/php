<?php

declare(strict_types=1);

class HTMLTag extends HTMLDecorator
{
    public function getHTML(): string
    {
        $this->tag = "HTML";
        return "<{$this->tag}>" . $this->hTMLInterface->getHTML() . "</{$this->tag}>";
    }
}