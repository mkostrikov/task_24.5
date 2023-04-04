<?php

namespace Application\Controllers;

use Application\Models\Model;
use Application\View\View;

class MainController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main(): void
    {
        $data = Model::main();
        $this->view->view('main.php', $data);
    }

    public function about(): void
    {
        $data = Model::about();
        $this->view->view('about.php', $data);
    }
}
