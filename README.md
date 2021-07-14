# calculadora
Paquete de prueba para calculadora

Agregue en el archivo config/app la siguiente línea. 
/*
 * Package Service Providers...
*/

Tarsicio\Calculadora\CalculadoraServiceProvider::class,

En el archivo composer.json incluir en la línea de psr-4, la siguiente línea

"autoload": {
   "psr-4": {
      "Tarsicio\\Calculadora\\": "horus/tarsicio/calculadora/src/"
},
