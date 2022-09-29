<?php
class Login extends Controller{

    function __construct(){
        parent::__construct();
        error_log('login::construct->Iniciando controlador login');
    }

    function render(){
        error_log('login::render->Carga el index del login');
        $this->view->render('login/index');
    }

}

?>