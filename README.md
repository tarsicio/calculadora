# Calculadora
<div style="text-align: center;">
<h1>PAQUETE DE PRUEBA PARA SUMAR Y RESTAR, POR LA URL</h1>
</div>
<div>
Ejecute en su terminal o línea de comando, lo siguiente 
</div>
<p>
<div>
<b>composer require tarsicio/calculadora</b>
</div>
<p>
Luego agregue en el archivo config/app la siguiente línea. 
<p>
/*
<p>
 * Package Service Providers...
<p>  
 */
<p>
<b>Tarsicio\Calculadora\CalculadoraServiceProvider::class,</b>
<div>
Despues ejecuta el siguiente comando en su terminal
</div>
<p>
  <b>php artisan vendor:publish --provider="Tarsicio\Calculadora\CalculadoraServiceProvider"</b>
<p>
<div>
y por último ejecute el siguiente comando para correr las migraciones
</div>
<p>
<div>
  <b>php artisan migrate</b>
<p>
<div>
  se debe ejecutar la siguiente migración, 2021_05_18_161653_create_tiendas_visitadas_table, dicha migración viene con la libreria
  </div>
 <p>
<div>
Luego puede utilizar las siguientes rutas para observar los resultados.  
</div>  
<p>
  <div><h2>EJEMPLO</h2></div>
  <p>
  <div>http://localhost:8000/calculadora</div><p>   
    <div>http://localhost:8000/sumar/12/21</div><p>   
    <div>http://localhost:8000/restar/21/12</div><p>   
 <div>
   <b>Nota Importante:</b> Espero que esta librería de Ejemplo lo ayude en su proyecto, usted utiliza el presente código bajo su responsabilidad y criterio 

