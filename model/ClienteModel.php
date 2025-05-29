<?php  
    require_once './config/DB.php';
    require_once 'Cliente.php';

    class ClienteModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }

        public function guardar(Cliente $cliente){
            $sql='insert into cliente (nombre, apellidos, dni, celular, direccion) values (:nom, :des, :dni, :cel, :dir)';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":nom", $cliente->getNombre());
            $ps->bindParam(":des", $cliente->getApellidos());
            $ps->bindParam(":dni", $cliente->getDni());
            $ps->bindParam(":cel", $cliente->getCelular());
            $ps->bindParam(":dir", $cliente->getDireccion());
            $ps->execute();
        }

        public function cargar(){
            $sql="select * from cliente";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $clientes=array();
            foreach($filas as $f){
                $cli=new Cliente();
                $cli->setIdCliente($f[0]);
                $cli->setNombre($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setDni($f[3]);
                $cli->setCelular($f[4]);
                $cli->setDireccion($f[5]);
                array_push($clientes, $cli);
            }
            return $clientes;
        }
    }
?>

