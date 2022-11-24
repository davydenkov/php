<?php

declare(strict_types=1);

class BODYTag extends HTMLDecorator
{
    public function getHTML(): string
    {
        $this->tag = "BODY";
        return "<{$this->tag}>" . $this->hTMLInterface->getHTML() . "</{$this->tag}>";
    }
}