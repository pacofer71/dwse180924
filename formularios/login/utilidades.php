<?php
$usuarios=[
    'admin@gmail.com'=>
        ['$2y$10$Duge70Dd5HmdnG80PN7WVO9Hg4jBhxS37YPWUgD4bxoEcNS4SVAqG', true],
    'user1@gmail.com'=>
        ['$2y$10$Duge70Dd5HmdnG80PN7WVO9Hg4jBhxS37YPWUgD4bxoEcNS4SVAqG', false],
    'user2@gmail.com'=>
        ['$2y$10$Duge70Dd5HmdnG80PN7WVO9Hg4jBhxS37YPWUgD4bxoEcNS4SVAqG', false],
];

function sanearCadenas(string $cadena): string{
    return htmlspecialchars(trim($cadena));
}
function isLongitudValida(string $cadena, int $min, int $max): bool{
    return !(strlen($cadena)<$min || strlen($cadena)>$max);
}
function pintarErrores(string $nombre){
    if(isset($_SESSION[$nombre])){
        echo "<p class='italic text-red-600 text-sm mt-2'>{$_SESSION[$nombre]}</p>";
        unset($_SESSION[$nombre]);
    }
}
function validarUsuario(string $email, string $password): bool{
    global $usuarios;
    foreach ($usuarios as $emailUsuario => $datosUsuario) {
        if ($emailUsuario == $email) {
            if (password_verify($password, $datosUsuario[0])) {
               return true;
            }
        }
    }
    return false;
}

//echo password_hash("secret0", PASSWORD_BCRYPT);