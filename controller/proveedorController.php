<?php
    require './model/ClienteModel.php';
    class ClienteController{
        public function cargar(){
            $model=new ClienteModel();
            $proveedores=$model->cargar();
            require './view/viewCargarProveedores.php';
        }

        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ClienteModel();
                $proveedor=new Familia();
                $proveedor->setNombre($_POST['txtNom']);
                $proveedor->setRuc($_POST['txtRuc']);
                $model->guardar($proveedor);
                header('Location: index.php');
            }
            else{
                require './view/viewGuardarProveedor.php';
            }

        }
    }
?>