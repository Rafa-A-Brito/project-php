<?php
$nome = $_REQUEST["txtName"];
$idade = $_REQUEST["txtAge"];
$email = $_REQUEST["txtEmail"];
$senha = $_REQUEST["txtPassword"];

include "conexao.php";

$sql = "INSERT INTO aluno (nome, idade, email, senha) VALUES (:nome, :idade, :email, :senha)";
$stm = $conexao->prepare($sql);
$stm->bindValue(':nome', $nome);
$stm->bindValue(':idade', $idade);
$stm->bindValue(':email', $email);
$stm->bindValue(':senha', $senha);

$resultado = $stm->execute();

// Agora envolve em HTML
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Processando...</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
if ($resultado) {
    echo '<script>
        Swal.fire({
            title: "Sucesso!",
            text: "Dados gravados com sucesso!!!",
            icon: "success",
            confirmButtonText: "OK"
        }).then(() => {
            window.location.href = "index.html";
        });
    </script>';
} else {
    echo '<script>
        Swal.fire({
            title: "Erro!",
            text: "Falha ao gravar os dados.",
            icon: "error",
            confirmButtonText: "Tentar Novamente"
        }).then(() => {
            window.location.href = "index.html";
        });
    </script>';
}
?>
</body>
</html>