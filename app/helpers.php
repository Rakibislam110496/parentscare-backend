<?php

use App\Models\Admin;
use App\Models\User;

if (!function_exists('isUser')) {
    function isUser(): bool
    {
        return get_class(auth()->user()) == User::class;
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin(): bool
    {
        return get_class(auth()->user()) == Admin::class;
    }
}
