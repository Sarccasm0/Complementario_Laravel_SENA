<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola mundo";
});

#Devolver o obtener productos en una array asociativo(Dict)
Route::get('/producto', function () {
    return view('almacen.producto', ['nombre' => 'Impresora EPSON','precio' => 2500000,'marca' => 'EPSON', ]);
});

#Obtener la aprobado o no aprobado, segun la nota
Route::get('/condicional/{nota}',function($nota){
    return view('estructuras.condicional',compact('nota'));
});

#Obtener a traves de switch, el dia de la semana
Route::get('/switch/{dia}',function($dia){
    return view('estructuras.switch',compact('dia'));
});

#Obtener sumar o repetir datos con while
Route::get('/while/{number}',function($number){
    return view('estructuras.while',compact('number'));
});

#Devolver o mostrar datos con For Each
Route::get('/foreach',function(){
    $lista =["Hola","Mundo","Desde","Laravel"];
    return view("estructuras.foreach",compact(var_name: "lista"));
});


