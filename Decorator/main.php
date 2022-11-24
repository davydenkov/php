<?php

declare(strict_types=1);

spl_autoload_register(function ($className) {
    include __DIR__ . '/' . $className . '.php';
});

$html = new HTMLComponent();
$html = new DIVTag($html);
$html = new BODYTag($html);
$html = new HTMLTag($html);

echo $html->getHTML();

