<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="./css/Administrador/administrador.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>

    <div class="wrapper">  
        <div class="header">
            <div class="header-menu">
                <div class="title">MPMML <span>Administrador</span></div>
                <div class="sidebar-btn">
                <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li> <a href="#"> <i class="fas fa-search"></i> </a> </li>
                    <li> <a href="#"> <i class="fas fa-bell"></i> </a> </li>
                    <li> <a href="Iniciar_Sesion"> <i class="fas fa-power-off"></i> </a> </li>
                </ul>
             </div>
        </div>
        
        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <img src="./images/perfil.jpg" alt="">
                    <p>Brayan</p>
                </center>
                <li class="item" id="payment">
                    <a href="Cliente" class="menu-btn">
                        <i class="fas fa-users"></i><span>Cliente </span>
                    </a>
                </li>
                <li class="item" id="profile">
                    <a href="Proveedor" class="menu-btn">
                        <i class="fas fa-user-tie"></i><span>Proveedor </span>
                    </a>
                </li>
                <li class="item" id="register">
                    <a href="Venta" class="menu-btn">
                        <i class="fas fa-shopping-cart"></i><span>Venta</span>
                    </a>
                </li>
                <li class="item" id="messages">
                    <a href="Almacen" class="menu-btn">
                        <i class="fas fa-warehouse"></i><span>Almacen</span>
                    </a>
                </li>
                <li class="item" id="document">
                    <a href="#document" class="menu-btn">
                        <i class="fas fa-file-alt"></i><span>Documentos <i class="fas fa-chevron-down drop-dow"></i></span>
                    </a>
                    <div class="sub-menu">
                    <a href="Boleta"><i class="fas fa-file-pdf"></i><span>Boleta</span></a>
                    <a href="#"><i class="fas fa-file-contract"></i><span>Reportes</span></a>
 
                    </div>
                </li>
                <li class="item" id="settings">
                    <a href="#settings" class="menu-btn">
                        <i class="fas fa-cog"></i><span>Configuracion<i class="fas fa-chevron-down drop-dow"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-lock"></i><span>Contraseña</span></a>
                        <a href="#"><i class="fas fa-language"></i><span>Idioma</span></a>
                    </div>
                </li>
                <li class="item">
                    <a href="#" class="menu-btn">
                        <i class="fas fa-info-circle"></i><span>Acerca De</span>
                    </a>
                </li>
            </div>
        </div>
        <div class="main-container">
            <div class="card">
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                </p>
            </div>
            <div class="card">
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                </p>
            </div>
            <div class="card">
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        $(".sidebar-btn").click(function(){
            $(".wrapper").toggleClass("collapse");
        });
    });
    </script>
</body>
</html>