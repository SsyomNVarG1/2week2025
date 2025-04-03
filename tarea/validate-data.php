<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];

    // Validar Apellidos
    if (empty($_POST["apellido"])) {
        $errores[] = "El campo 'Apellidos' es obligatorio.";
    } else {
        $apellido = htmlspecialchars($_POST["apellido"], ENT_QUOTES, 'UTF-8');
        if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/", $apellido)) {
            $errores[] = "El campo 'Apellidos' solo debe contener letras y espacios.";
        }
    }

    // Validar Nombres
    if (empty($_POST["nombre"])) {
        $errores[] = "El campo 'Nombres' es obligatorio.";
    } else {
        $nombre = htmlspecialchars($_POST["nombre"], ENT_QUOTES, 'UTF-8');
        if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/", $nombre)) {
            $errores[] = "El campo 'Nombres' solo debe contener letras y espacios.";
        }
    }

    // Validar Fechas de Asistencia
    if (empty($_POST["fecha-asistencia"]) || !is_array($_POST["fecha-asistencia"])) {
        $errores[] = "Debe seleccionar al menos una 'Fecha de Asistencia'.";
    } else {
        $fechas_asistencia = implode(", ", $_POST["fecha-asistencia"]); // Convertir array en texto
    }

    // Validar Email
    if (empty($_POST["email"])) {
        $errores[] = "El campo 'Correo Electrónico' es obligatorio.";
    } else {
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        if (!$email) {
            $errores[] = "El 'Correo Electrónico' no es válido.";
        }
    }

    // Validar Fecha de Nacimiento
    if (empty($_POST["fecha-nacimiento"])) {
        $errores[] = "El campo 'Fecha de Nacimiento' es obligatorio.";
    } else {
        $fecha_nacimiento = $_POST["fecha-nacimiento"];
        $fecha_actual = date("Y-m-d");
        if ($fecha_nacimiento >= $fecha_actual) {
            $errores[] = "La 'Fecha de Nacimiento' no puede ser hoy o en el futuro.";
        }
    }

    // Validar Redes Sociales (URL)
    $redes = !empty($_POST["redes"]) ? filter_var($_POST["redes"], FILTER_VALIDATE_URL) : "No proporcionado";

    // Validar Perfil del Inscripto
    if (empty($_POST["perfil"])) {
        $errores[] = "Debe seleccionar un 'Perfil del Inscripto'.";
    } else {
        $perfil = $_POST["perfil"];
    }

    // Validar Charlas / Cursos
    if (empty($_POST["charlas"]) || !is_array($_POST["charlas"])) {
        $errores[] = "Debe seleccionar al menos una 'Charla / Curso'.";
    } else {
        $charlas = implode(", ", $_POST["charlas"]);
    }

    // Verificar si el email ya está registrado
    $archivo = "registros.csv";
    if (file_exists($archivo)) {
        $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
        foreach ($lineas as $linea) {
            $datos = explode(" | ", $linea);
            if (isset($datos[2]) && trim($datos[2]) === trim($email)) {
                $errores[] = "El 'Correo Electrónico' ya está registrado.";
                break;
            }
        }
    }

    // Si no hay errores, guardar en archivo plano
    if (empty($errores)) {
        $datos = "$apellido | $nombre | $email | $fecha_nacimiento | $fechas_asistencia | $perfil | $charlas | $redes" . PHP_EOL;
        file_put_contents($archivo, $datos, FILE_APPEND); // Guardar en archivo

        echo "<p style='color:green;'>Registro exitoso y almacenado en archivo. <a href='index.html'>volver</a></p>";
    } else {
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
