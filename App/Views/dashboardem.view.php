
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Panel de Control</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

        <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    </head>


    <body>

        <div class="wrapper">


        <div class="body-overlay"></div>


                <!-- Sidebar  -->
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3><img src="#" class="img-fluid"/><span>SkynetCusco</span></h3>
                    </div>
                    <ul class="list-unstyled components">
                    <li  class="active">
                            <a href="#" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                        </li>
                
                    <div class="small-screen navbar-display">
                        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">notifications</i><span> 4 notification</span></a>
                            <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                                            <li>
                                            <a href="#">You have 5 new messages</a>
                                            </li>
                                            <li>
                                                <a href="#">You're now friend with Mike</a>
                                            </li>
                                            <li>
                                                <a href="#">Wish Mary on her birthday!</a>
                                            </li>
                                            <li>
                                                <a href="#">5 warnings in Server Console</a>
                                            </li>
                            </ul>
                        </li>
                        
                        <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                        </li>
                        
                        <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#"><i class="material-icons">person</i><span>user</span></a>
                        </li>
                        
                        <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                        </li>
                        </div>
                    
                    
                        <li class="dropdown">
                            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">aspect_ratio</i><span>Agencia</span></a>
                            <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                                <li>
                                    <a href="#">Personalizar Agencia</a>
                                </li>
                            </ul>
                        </li>

                <!-- Page Content  -->
                <div id="content">
                
                <div class="top-navbar">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">

                            <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                                <span class="material-icons">arrow_back_ios</span>
                            </button>
                            
                            <a class="navbar-brand" href="#"> Panel de Control </a>
                            
                            <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="material-icons">more_vert</span>
                            </button>

                            <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                                <ul class="nav navbar-nav ml-auto">   
                                    <li class="dropdown nav-item active">
                                        <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">Notificaciones</span>
                                        <span class="notification">4</span>
                                    </a>
                                        <ul class="dropdown-menu">
                                            <!-- <li>
                                                <a href="#">You have 5 new messages</a>
                                            </li>
                                            <li>
                                                <a href="#">You're now friend with Mike</a>
                                            </li>
                                            <li>
                                                <a href="#">Wish Mary on her birthday!</a>
                                            </li>
                                            <li>
                                                <a href="#">5 warnings in Server Console</a>
                                            </li> -->
                                        
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                        <span class="material-icons">Aplicaciones</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                        <span class="material-icons">person</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                        <span class="material-icons">Configuraciones</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                    
                    
                    <div class="main-content">
                    
                    <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header">
                                            <div class="icon icon-warning">
                                            <span class="material-icons">equalizer</span>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p class="category"><strong>Visits</strong></p>
                                            <h3 class="card-title">70,340</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons text-info">info</i>
                                                <a href="#pablo">See detailed report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header">
                                            <div class="icon icon-rose">
                                            <span class="material-icons">shopping_cart</span>

                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p class="category"><strong>Orders</strong></p>
                                            <h3 class="card-title">102</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">local_offer</i> Product-wise sales
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header">
                                            <div class="icon icon-success">
                                                <span class="material-icons">
        attach_money
        </span>

                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p class="category"><strong>Revenue</strong></p>
                                            <h3 class="card-title">$23,100</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">date_range</i> Weekly sales
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header">
                                            <div class="icon icon-info">
                                            
        <span class="material-icons">
        follow_the_signs
        </span>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p class="category"><strong>Followers</strong></p>
                                            <h3 class="card-title">+245</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">update</i> Just Updated
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <footer class="footer">
                        <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-6">
                            <nav class="d-flex">
                                <ul class="m-0 p-0">
                                    <li>
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            edicion de datos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        
                        </div>
                        <div class="col-md-6">
                        <p class="copyright d-flex justify-content-end"> Todos los derechos Reservados
                                <a href="#">Sistema de </a> Facturacion
                            </p>
                        </div>
                        </div>
                            </div>
                    </footer>
                            
                            </div>
                            
                        

                </div>
            </div>
    </body>
</html>