<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    function welcome(Request $request)
    {
        Log::info('Welcome page');
        Log::info(print_r($request->all(), true));
        return view('welcome');
    }

    function testView(Request $request)
    {
        // var_dump($request->all());
        var_dump($request->query('name'));
        $name = $request->query('name', 'Ahmed Nombre por defecto');
        return view('test', [
            // El nombre de la variable que vamos a utilizar
            //  en el template
            'nombre' => $name,
            'books' => ['Book 1', 'Book 2', 'Book 3'],
            'countries' => [
                'Colombia' => ['Bogota', 'Medellin', 'Cali'],
                'Peru' => ['Lima', 'Cuzco', 'Arequipa'],
                'Ecuador' => ['Quito', 'Guayaquil', 'Cuenca']
            ]
        ]);
    }
}
