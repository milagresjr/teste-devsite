<?php
$page = $_GET['pg'];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div class="header">
        <h2>Logo</h2>
        <div class="nav">
            <a href="cadastro.php?pg=1" id="menuCad" class="<?php echo ($page==1) ? 'active':'' ?>">Cadastrar texto</a>
            <span class="divider"></span>
            <a href="visualizar.php?pg=2" id="menuView" class="<?php echo ($page==2) ? 'active':'' ?>">Visualizar cadastro</a>
        </div>
    </div>

