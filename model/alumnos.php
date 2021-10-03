<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'conectadb.php';

class alumnos {

    public $id;
    public $alumno;
    public $nombre;
    public $sexo;

    public function __construct($id, $alumno, $nombre, $sexo) {
        $this->id = $id;
        $this->alumno = $alumno;
        $this->nombre = $nombre;
        $this->sexo = $sexo;
    }

    public static function consultar() {
        echo 'entra';
        $mysqli = conectadb::dbmysql(); //apartir de aqui esta el error
        echo 'paso consultar dbmysql';
        $consulta = "select * from alumnos";
        echo '<br>';

        $resultado = mysqli_query($mysqli, $consulta);
        if (!$resultado) {
            echo 'No pude realizar la consulta a la base';
            exit;
        }
        $listaAlumnos = [];
        while ($alumno = mysqli_fetch_array($resultado)) {
            $listaAlumnos[] = new alumnos($alumno['id'], $alumno['alumno'], $alumno['nombre'], $alumno['sexo']);
        }
        $mysqli->close();
        return $listaAlumnos;
    }

    /* hola */

    public static function login($_usuario, $_password) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT usuario, password FROM usuarios WHERE usuario = ? and password =?');
        $stmt->bind_param('ss', $_usuario,$_password);
        //$stmt->bindParam(':contraseña', $_password);
        $stmt->execute();
        $resultado = $stmt->get_result();

        while ($filasql = mysqli_fetch_array($resultado)) {
            // Imprimir por Arreglo Asociado
            // echo $filasql['user'] . ' ';
            // echo $filasql['password'] . ' ';
            // initialize session variables
            session_start();
            // $_SESSION['loggedDataTime'] = datatime();
            $_SESSION['Nombre_usuario'] = $filasql['usuario'];
        }
        $acceso = false;
        if ($stmt->affected_rows == 1) {
            $acceso = true;
        }
        $mysqli->close();
        return $acceso;
    }

    public static function delete($_idalumno) {
        $mysqli = conectadb::dbmysql();

        $stmt = $mysqli->prepare('DELETE FROM alumnos WHERE id = ? ');
        $stmt->bind_param('i', $_idalumno);
        $stmt->execute();
        $resultado = $stmt->get_result();
    }

}

?>