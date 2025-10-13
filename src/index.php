<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Tesla</title>
    <link rel="stylesheet" href="views/css/cuenta.css">
    <link rel="icon" href="views/images/teslafevicon.png" type="image/png">
    <link rel="shortcut icon" type="image/jpg" href="views/images/teslaLogo.png" />
</head>
<body>
<header>
    <img src="views/images/teslaLogo.png" alt="Tesla Logo" class="header-logo">
</header>
<div class="login-container">
    <div class="login-box">
        <img src="views/images/teslaLogo.png" alt="Tesla Logo" class="logo">
        <h2>Iniciar Sesión</h2>
        <form action="views/welcome.php" method="POST">
            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="correo@ejemplo.com">
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="********">
            </div>
            <button>Iniciar Sesión</button>
            <p class="register-link">¿No tienes cuenta? <a href="#">Regístrate</a></p>
        </form>
    </div>
</div>
</body>
</html>
