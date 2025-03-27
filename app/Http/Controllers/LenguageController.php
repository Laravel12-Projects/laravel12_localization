<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LenguageController extends Controller
{
   
    public function switchLenguage($lang)
    {
        // Si el idioma existe en la configuracion de idiomas, lo establecemos como idioma actual
        // y lo guardamos en la sesion para que se mantenga en futuras peticiones
        if (isset(config('languages')[$lang])) {
            App::setLocale($lang);
            session(['applocale' => $lang]);
        }
        // Regresamos a la pagina de donde se llama a  este metodo con un mensaje de que se ha cambiado el idioma
        return back()->with('language_switched', $lang);
    }
}
