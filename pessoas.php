<?php
$conexao = new mysqli("localhost", "root", "", "aula_metodo");
$metodo = $_SERVER["REQUEST_METHOD"];

if ($metodo === "GET"){

}
if ($metodo === "POST"){
    $conexao->query("INSERT INTO pessoas(nome , email) VALUES ('Carla', 'carla@gmail.com')");
}
 
if ($metodo === "PUT"){
    $conexao->query("UPDATE pessoas SET nome = 'amanda', email = 'amanda_new@gmail.com' WHERE id = 1");
}

if ($metodo === "PATCH"){
     $conexao->query("UPDATE pessoas SET email = 'amanda_new_02@gmail.com' WHERE id = 1");
}

if ($metodo === "DELETE"){
    $conexao->query("DELETE FROM pessoas WHERE id = 1 ");
}

if ($metodo === "OPTIONS"){
    echo "Aceito: GET, POST, PUT, PATCH, DELETE, OPTIONS\n";
}

echo "Método:". $metodo."\n";
$r = $conexao->query("SELECT * FROM pessoas");
while($linha = $r->fetch_assoc() ){
    echo $linha["id"] . "-" . $linha["nome"]. "-" .$linha["email"] . "\n";
} 
?>

