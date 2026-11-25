<?php 
// Cria a classe para conexão com o banco de dados
class Database{
    private static $conn;

    public static function conectar(){
        if(!self::$conn){
            self::$conn = new PDO(
                "pgsql:host=192.168.10.53;port=5432;dbname=crud_movies", "movies","1212", [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        }
        return self::$conn;
    }
}

?>

