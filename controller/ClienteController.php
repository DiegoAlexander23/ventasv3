<?php
    require './model/ClienteModel.php';
    class ClienteController{
        public function cargar(){
            $model=new ClienteModel();
            $clientes=$model->cargar();
            require './view/CargarClientes.php';
        }

        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ClienteModel();
                $cliente=new Cliente();
                $cliente->setNombre($_POST['txtNom']);  
                $cliente->setApellidos ($_POST['txtApe']);
                $cliente->setDni($_POST['txtDni']);
                $cliente->setCelular($_POST['txtCel']);
                $cliente->setDireccion($_POST['txtDir']);
                $model->guardar($cliente);
                header('Location: index.php');
            }
            else{
                require './view/GuardarCliente.php';
            }

        }
    }
?>