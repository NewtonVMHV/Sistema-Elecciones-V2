<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Elecciones</title>
    <link rel="shortcut icon" href="{{ URL::asset('img/e.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar{
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 260px;
            background: #11101d;
            z-index: 100;
            transition: all 0.5s ease;
        }
        .sidebar.close{
            width: 78px;
        }
        .sidebar .logo-details{
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
        }
        .sidebar .logo-details i{
            font-size: 30px;
            color: #fff;
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;
        }
        .sidebar .logo-details .logo_name{
            font-size: 22px;
            color: #fff;
            font-weight: 600;
            transition: 0.3s ease;
            transition-delay: 0.1s;
        }
        .sidebar.close .logo-details .logo_name{
            transition-delay: 0s;
            opacity: 0;
            pointer-events: none;
        }
        .sidebar .nav-links{
            height: 100%;
            padding: 30px 0 150px 0;
            overflow: auto;
        }
        .sidebar.close .nav-links{
            overflow: visible;
        }
        .sidebar .nav-links::-webkit-scrollbar{
            display: none;
        }
        .sidebar .nav-links li{
            position: relative;
            list-style: none;
            transition: all 0.4s ease;
        }
        .sidebar .nav-links li:hover{
            background: #1d1b31;
        }
        .sidebar .nav-links li .iocn-link{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .sidebar.close .nav-links li .iocn-link{
            display: block
        }
        .sidebar .nav-links li i{
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .sidebar .nav-links li.showMenu i.arrow{
            transform: rotate(-180deg);
        }
        .sidebar.close .nav-links i.arrow{
            display: none;
        }
        .sidebar .nav-links li a{
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        .sidebar .nav-links li a .link_name{
            font-size: 18px;
            font-weight: 400;
            color: #fff;
            transition: all 0.4s ease;
        }
        .sidebar.close .nav-links li a .link_name{
            opacity: 0;
            pointer-events: none;
        }
        .sidebar .nav-links li .sub-menu{
            padding: 6px 6px 14px 80px;
            margin-top: -10px;
            background: #1d1b31;
            display: none;
        }
        .sidebar .nav-links li.showMenu .sub-menu{
            display: block;
        }
        .sidebar .nav-links li .sub-menu a{
            color: #fff;
            font-size: 15px;
            padding: 5px 0;
            white-space: nowrap;
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        .sidebar .nav-links li .sub-menu a:hover{
            opacity: 1;
        }
        .sidebar.close .nav-links li .sub-menu{
            position: absolute;
            left: 100%;
            top: -10px;
            margin-top: 0;
            padding: 10px 20px;
            border-radius: 0 6px 6px 0;
            opacity: 0;
            display: block;
            pointer-events: none;
            transition: 0s;
        }
        .sidebar.close .nav-links li:hover .sub-menu{
            top: 0;
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
        }
        .sidebar .nav-links li .sub-menu .link_name{
            display: none;
        }
        .sidebar.close .nav-links li .sub-menu .link_name{
            font-size: 18px;
            opacity: 1;
            display: block;
            }
        .sidebar .nav-links li .sub-menu.blank{
            opacity: 1;
            pointer-events: auto;
            padding: 3px 20px 6px 16px;
            opacity: 0;
            pointer-events: none;
        }
        .sidebar .nav-links li:hover .sub-menu.blank{
            top: 50%;
            transform: translateY(-50%);
        }
        .sidebar{
            font-size: 12px;
        }
        .home-section{
            position: relative;
            background: #fff;
            height: 100vh;
            left: 260px;
            width: calc(100% - 260px);
            transition: all 0.5s ease;
            padding: 12px;
        }
        .sidebar.close ~ .home-section{
            left: 78px;
            width: calc(100% - 78px);
        }
        .home-content{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .home-section .home-content .bx-menu,
        .home-section .home-content .text{
            color: #11101d;
            font-size: 35px;
        }
        .home-section .home-content .bx-menu{
            cursor: pointer;
            margin-right: 10px;
        }
        .home-section .home-content .text{
            font-size: 26px;
            font-weight: 600;
        }

        @media screen and (max-width: 400px){
            .sidebar{
                width: 240px;
            }
            .sidebar.close{
                width: 78px;
            }
            .sidebar{
                width: 240px;
            }
            .sidebar.close{
                background: none;
            }
            .sidebar.close{
                width: 78px;
            }
            .home-section{
                left: 240px;
                width: calc(100% - 240px);
            }
            .sidebar.close ~ .home-section{
                left: 78px;
                width: calc(100% - 78px);
            }
        }
    </style>
</head>
<body>
<div class="sidebar close">
    <div class="logo-details">
        <img src="{{ URL::asset('img/e.png') }}" alt="logo" width="70">
        <span class="logo_name">lecciones</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ route('home') }}"><i class='bx bx-grid-alt' ></i><span class="link_name">Dashboard</span></a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{ route('home') }}">Dashboard</a></li>
            </ul>
        </li>
        @if (Auth::user()->hasRole('Admin'))
        <li>
            <div class="iocn-link">
                <a href="#"><i class='bx bx-user-circle'></i><span class="link_name">Control</span></span></a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Control</a></li>
                <li><a href="{{ route('users.index') }}">Control de usuarios</a></li>
                <li><a href="{{ route('roles.index') }}">Control de roles</a></li>
                <li><a href="{{ route('tipos.index') }}">Control de tipos</a></li>
            </ul>
        </li>
        @endif
        <li>
            <div class="iocn-link">
                <a href="#"><i class='bx bxs-calendar-check'></i><span class="link_name">Estructura</span></span></a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Estructura</a></li>
                <li><a href="{{ route('Estructura.index') }}">Estructura del cambio</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#"><i class='bx bx-git-pull-request' ></i><span class="link_name">Gestiones</span></a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Gestiones</a></li>
                <li><a href="{{ route('Gestiones.index') }}">Solicitudes</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#"><i class='bx bx-pie-chart-alt-2' ></i><span class="link_name">Estadísticas</span></a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Estadísticas</a></li>
                <li><a href="{{ route('Control-Estadistico.index') }}">Control Estadístico</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#"><i class='bx bx-cog' ></i><span class="link_name">Ajustes</span></a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Ajustes</a></li>
                <li><a href="">Ver Perfil</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Cerrar Sesión</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </li>
    </ul>
</div>
<section class="home-section">
    <div class="home-content">
        @yield('content')
    </div>
</section>
<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".logo-details");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>