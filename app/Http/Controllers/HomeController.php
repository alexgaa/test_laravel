<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * @return string
     */
    public function index(): string
    {
        return "Hello NomeController";
    }
}
