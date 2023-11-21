<?php

class connection
{
    public function conn()
    {
        $config = json_decode(file_get_contents(__DIR__ . "/config/dba.json"), true);
        try {
            $pdo = new PDO("mysql:host=" . $config["host"] . ";dbname=" . $config["dbname"] . ";port=" . $config["port"], $config["user"], $config["password"]);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection :" . $e->getMessage();
        }
    }
}

$connection = new connection;

$conn = $connection->conn();

function getAll($conn)
{
    $res="";
    foreach ($conn->query('SELECT * FROM examen') as $row) {
        $res .= "Nombre: " . $row['nombre'] . "\t";
        $res .= "Edad: " . $row['edad'] . "\t";
        $res .= "Estilo: " . $row['estilo'] . "<br>";
    }
    return $res;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=getAll($conn);?>
</body>
</html>