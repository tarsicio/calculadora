<?php

Route::get('calculadora', function(){
	echo 'Este escrito esta en el archivo Route, att, Tarsicio Carrizales!';
});

Route::get('sumar/{a}/{b}', 'Tarsicio\Calculadora\CalculadoraController@sumar');
Route::get('restar/{a}/{b}', 'Tarsicio\Calculadora\CalculadoraController@restar');
