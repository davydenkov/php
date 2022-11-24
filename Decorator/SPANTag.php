<?php

declare(strict_types=1);

class SPANTag extends HTMLDecorator
{
    public function getHTML(): string
    {
        $this->tag = "SPAN";
        return "<{$this->tag}>" . $this->hTMLInterface->getHTML() . "</{$this->tag}>";
    }
}