<?php
class PageController extends Controller{
    public function login(){
        //echo "Conectado";
        // require_once(__DIR__ . '/../Views/login.view.php');
        $this->render('login');
    }
    public function dashboardem(){
        // echo "Modo nuevo";
        require_once(__DIR__ . '/../Views/dashboardem.view.php');
    }

    public function listar(){
        // echo "Modo listar";
        require_once(__DIR__ . '/../Views/listar.view.php');
    }
    public function modificar(){
        // echo "Modo modificar";
        require_once(__DIR__ . '/../Views/modificar.view.php');
    }
    public function nuevo(){
        // echo "Modo nuevo";
        require_once(__DIR__ . '/../Views/nuevo.view.php');
    }
}
// corregir errores de controlador y vistas 9
?>

