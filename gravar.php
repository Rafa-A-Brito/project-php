<?php
$codigo = $_REQUEST["txtCode"];
$nome = $_REQUEST["txtName"];
$idade = $_REQUEST["txtAge"];
$email = $_REQUEST["txtEmail"];
$senha = password_hash($_REQUEST["txtPassword"], PASSWORD_DEFAULT);

include "conexao.php";

$sql = "INSERT INTO aluno (codigo, nome, idade, email, senha) VALUES (:codigo,:nome, :idade, :email, :senha)";
$stm = $conexao->prepare($sql);

$stm->bindValue(':codigo', $codigo);
$stm->bindValue(':nome', $nome);
$stm->bindValue(':idade', $idade);
$stm->bindValue(':email', $email);
$stm->bindValue(':senha', $senha);

$resultado = $stm->execute();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Processando...</title>
</head>
<body>
    
<?php
if ($resultado) {
    echo '<script>
    Swal.fire({
        title: "Sucesso!",
        text: "Dados gravados com sucesso!",
        icon: "success",
        confirmButtonText: "OK",
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
        confirmButtonText: "Tentar Novamente",
    }).then(() => {
        window.location.href = "index.html";
    });
    </script>';
}
?>


</body>
</html>