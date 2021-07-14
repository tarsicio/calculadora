<?php

Route::get('calculadora', function(){
	echo 'Probando la ruta!';
});

Route::get('sumar/{a}/{b}', 'Tarsicio\Calculadora\CalculadoraController@sumar');
Route::get('restar/{a}/{b}', 'Tarsicio\Calculadora\CalculadoraController@restar');