<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        dump($_ENV);
        return view('home', ['titleName' => 'Home Controller']);
    }

    /**
     * @param int $id
     * @return string
     */
    public function test(int $id = 0): string
    {
        dump($id);
        return __METHOD__;
    }
}
