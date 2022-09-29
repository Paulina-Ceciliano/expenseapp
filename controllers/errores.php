<?php
class Errores extends Controller{

    function __construct(){
        parent::__construct();
        error_log('errores::construct->Iniciando controlador errores');
    }
    
    function render(){
        $this->view->render('errores/index');
    }
}
?>