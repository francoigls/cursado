
<?php
require_once __DIR__ . '/autoload.php';

use Modelos\Usuario;

$usuario = new Usuario();
echo $usuario->decirHola();
$usuario->name = "Franco";
$usuario->ObtenerNombres();

use base\Persona;
use Modelos\Empleado;

$empleado = new Empleado();

echo $empleado->trabajar();


use controladores\controladorUsuario;

$controlador = new ControladorUsuario();
echo $controlador->inicio();


use Utilidades\Matematica;

echo Matematica::sumar(3, 4);


use configuracion\ConfiguracionApp;

echo "llamado a " . ConfiguracionApp::NOMBRE_APP;




?>


1. Crear una clase `Usuario` dentro del namespace `Modelos`. La clase debe tener un método `decirHola()` que devuelva el mensaje `"Hola desde Usuario"`. Usar esa clase desde otro archivo.

2. Crear una clase `Persona` en el namespace `Base` con un método `saludar()`. Luego, crear la clase `Empleado` en el namespace `Modelos` que herede de `Persona` y tenga su propio método `trabajar()`.

3. Suponer que hay una clase `Ayudante` en `Proveedor\Herramientas`. Importar esta clase usando un alias `AyudaProveedor` y llamar a su método estático `ayudar()`.

4. Crear una interfaz `Renderable` en el namespace `Contratos` con el método `renderizar()`. Luego, crear una clase `Vista` en el namespace `Vistas` que implemente esa interfaz.

5. Configurar autoloading usando `spl_autoload_register`. Cargar automáticamente las clases del namespace `Modelos` desde `src/Modelos/`.

6. Crear una clase `ControladorUsuario` en el namespace `Controladores`. Incluir un método `inicio()` que devuelva `"Página de usuarios"`.

7. Crear una clase `Matematica` en el namespace `Utilidades` con un método estático `sumar($a, $b)` que retorne la suma de los dos parámetros.

8. Crear una clase `ConfiguracionApp` en el namespace `Configuracion` con una constante `NOMBRE_APP`. Acceder al valor de esta constante desde otro archivo.

9. Crear un archivo `funciones.php` en el namespace `Ayudantes` que contenga una función `saludar()`. Usar esa función desde otro archivo.

10. Crear una clase `Usuario` en el namespace `Modelos` con un método `obtenerNombre()`. Luego, crear una clase `ControladorUsuario` en el namespace `Controladores` que utilice `Usuario` para mostrar el nombre del usuario.