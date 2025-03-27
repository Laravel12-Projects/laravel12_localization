<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{
    public function index()
    {
        $name = __('info.author_name'); // Traducir antes de enviar a la vista
        $info = __('info.greetings', ['name' => $name]); // Traducir antes de enviar a la vista
        $description = __('info.description'); // Otro texto traducido

        return view('info', compact('name', 'info', 'description'));
    }
}
