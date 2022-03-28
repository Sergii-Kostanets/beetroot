<?php

use App\Controllers\ApiUsers;

return [
    '/' => \App\Controllers\Homepage::class,
    '/posts' => \App\Controllers\Posts::class,
    '/users' => \App\Controllers\Users::class,
    '/api/users' => ApiUsers::class,
];

?>