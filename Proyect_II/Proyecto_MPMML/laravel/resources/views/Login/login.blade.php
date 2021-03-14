<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Pequeño Mundo Mehiley y Lidyana</title>
    <link rel="stylesheet" href="css/Login/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    
    <section>
        <input type="checkbox" id="check">
        <header>
            <h2> <a href="Inicio" class="logo">Logo</a></h2>
            <div class="navigation">
                <a href="Inicio">INICIO</a>
                <a href="Productos">PRODUCTOS</a>
                <a href="Contactos">CONTACTOS</a>
                <a href="Iniciar_Sesion">INICIAR SESION</a>
            </div>
            <label for="check">
                <i class="fas fa-bars menu-btn"></i>
                <i class="fas fa-times close-btn"></i>
            </label>
        </header>
        <div class="form">
        <center class="profile">
                    <img src="./images/perfil.jpg" alt="">
                </center>
                <p>Iniciar Sesion</p>
                <form >
                <select>
                        <option>Administrador</option>
                        <option selected="selected">Cliente</option>
                </select>
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <button>Iniciar Sesion</button>
                    <p class="message">No esta Registrado? <a href="#"> Crear Cuenta</a></p>
                </form>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </section>
</body>
</html>