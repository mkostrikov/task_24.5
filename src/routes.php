<?php

return [
    '~^$~' => [\Application\Controllers\MainController::class, 'main'],
    '~^about$~' => [\Application\Controllers\MainController::class, 'about'],
];