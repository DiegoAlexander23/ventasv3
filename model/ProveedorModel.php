<?php  
    require './config/DB.php';
    require 'Proveedor.php';

    class ProveedorModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }

        public function guardar(Proveedor $proveedor){
            $sql="insert into proveedor (nombre,ruc) values (:n, :r)";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":n", $proveedor->getNombre());
            $ps->bindParam(":r", $proveedor->getRuc());
            $ps->execute();
        }

        public function cargar(){
            $sql="select * from proveedor";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $proveedores=array();
            foreach($filas as $f){
                $pro=new Proveedor();
                $pro->setIdfamilia($f[0]);
                $pro->setNombre($f[1]);
                $pro->setRuc($f[2]);
                array_push($proveedores, $pro);
            }
            return $proveedores;
        }
    }
?>

