<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
});

Route::get('/categorias', function () {
    $categorias = [
        'fideos',
        'verduras',
        'arroz',
    ];

    foreach ($categorias as $categoria) {
        echo $categoria. '<br>';
    }
});

Route::get('categorias/{nombresCategorias}', function (string $nombresCategorias){
    echo "productos de " . $nombresCategorias;
});

Route::get('productos/{categoria?}', function (?string $categoria = null){
    $categorias = [
        "Fideos" => [
            'Monitos',
            'Fideos largos',
            'Cabello de angel',
        ],
        "Verduras" => [
            'Tomates',
            'Lechuga',
            'Cebolla',
        ],
    ];
    if (!is_null($categoria)){
        foreach ($categorias[$categoria] as $nombreProducto) {
            echo $nombreProducto .'<br>';
        }
    }else{
        foreach ($categorias[$categoria] as $nombreProducto) {
            echo $nombreProducto .'<br>';
        }
    }
    
});



//Route::get('categorias/fideos', function () {
//   echo 'productos de fideos';
//});
//
//Route::get('categorias/verduras', function () {
//    echo 'productos de verduras';
//});
//
//Route::get('categorias/arroz', function () {
//    echo 'productos de arroz';
//});
