<?php

use App\Controllers\UserController;

    $routes=[
        '/api/users'=>[UserController::class,'GET','index'],
        '/api/users/store'=>[UserController::class,'POST','store'],
        'api/users/show'=>[UserController::class,'GET','show'],
        'api/users/del'=>[UserController::class,'DELETE','del']
    ];
