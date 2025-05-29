<?php
    require_once './model/ClienteModel.php';
    class ClienteController{
        public function cargar(){
            $model=new ClienteModel();
            $proveedores=$model->cargar();
            require_once './view/viewCargarProveedores.php';
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
                require_once './view/viewGuardarProveedor.php';
            }

        }
    }
?>