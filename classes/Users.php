<?php 
class Users {
    private $db;

    function __construct($base) {
        $this->db = $base;
    }
    public function createUser($nombre, $edad, $sexo, $rolid) {
        $answer = $this->db->runQuery("INSERT INTO usuarios 
        VALUES (default, '$nombre', '$edad', '$sexo', '$rolid')");
        return $answer;
    }
    public function getUser() {
        $answer = $this->db->runQuery("SELECT * FROM usuarios ORDER BY NOMBRE");
        return $answer;
    }
    public function getIdUser($id){
        $answer = $this->db->runQuery("SELECT * FROM usuarios WHERE ID = $id");
        return $answer;
    }
    public function deleteUsers($id) {
        $answer = $this->db->runQuery("DELETE FROM usuarios WHERE ID = $id");
        return $answer;

    }
    public function updateUsers($id,$nombre, $edad, $sexo, $rolid) {
        $answer = $this->db->runQuery("UPDATE usuarios SET NOMBRE = '$nombre',
         EDAD = $edad, SEXO = '$sexo', ROLID = $rolid WHERE ID = $id");
         return $answer;
    }
}





?>