<?php

namespace Application\View;

class View
{
    private $templatesPath;

    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }

    public function view(string $templateName, array $vars = [], int $code = 200): void
    {

        http_response_code($code);
        extract($vars);

        include $this->templatesPath . '/' . $templateName;
    }
}