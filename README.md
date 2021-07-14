# calculadora
Paquete de prueba para calculadora

Agregue en el archivo config/app la siguiente línea. 
<br>
/*
 * Package Service Providers...
 */
<br>
Tarsicio\Calculadora\CalculadoraServiceProvider::class,
<br>

En el archivo composer.json incluir en la línea de psr-4, la siguiente línea
<br>
"autoload": {
   "psr-4": {
      "Tarsicio\\Calculadora\\": "horus/tarsicio/calculadora/src/"
},
