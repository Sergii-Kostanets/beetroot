<?php

use App\Controllers\ApiUsers;

return [
    '/' => \App\Controllers\Homepage::class,
    '/posts' => \App\Controllers\Posts::class,
    '/users' => \App\Controllers\Users::class,
    '/todos' => \App\Controllers\Todos::class,
    '/api/users' => ApiUsers::class,
    '/login' => \App\Controllers\Logins::class,
    '/reg' => \App\Controllers\Regs::class,
];

?>