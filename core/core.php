<?php 

class Conectar {

    public function a_jonas_builder() {

        // Switch de Producción: use true para producción, use false para desarrollo. 
        $production_database_switch = true; 

        if($production_database_switch) {

            # Producción 
            $db_name = 'disenad4_ponce-builder';
            $db_usuario = 'disenad4_builder';
            $db_password = 'c36oup9^nM0e';
            
        } 
        
        else {

            # Desarrollo 
            $db_name = 'app_builder';
            $db_usuario = 'root';
            $db_password = 'root'; 

        }

        $db_solicitud = 'mysql:host=localhost;dbname='.$db_name.';charset=utf8';

        $conexion = new PDO($db_solicitud,$db_usuario,$db_password);

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion; 

    }

}


class Usuarios {

    public function obtener_informacion($identificador) {

        $Resultados = null;

        $Conectar = new Conectar();
        $Conn = $Conectar->a_jonas_builder();

        $Solicitud = "SELECT * from usuarios where identificador=:identificador";
        
        $Consulta = $Conn->prepare($Solicitud);

        $Consulta->bindParam(':identificador',$identificador);

        $Consulta->execute();

        $Resultados = $Consulta->fetch(PDO::FETCH_ASSOC);

        return $Resultados;

    }

}

class Negocios {

    public function obtener_informacion($usuario) {

        $Resultados = null;

        $Conectar = new Conectar();
        $Conn = $Conectar->a_jonas_builder();

        $Solicitud = "SELECT * from usuarios_informacion where usuario=:usuario";
        
        $Consulta = $Conn->prepare($Solicitud);

        $Consulta->bindParam(':usuario',$usuario);

        $Consulta->execute();

        $Resultados = $Consulta->fetch(PDO::FETCH_ASSOC);

        return $Resultados;

    }

}
