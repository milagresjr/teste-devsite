<?php

include_once("../includes/header.php");

include_once "../db.php";

if(isset($_POST['btnCad'])) {
    $texto = htmlspecialchars($_POST['texto']);
    $query = $pdo->prepare("INSERT INTO texto(texto) VALUES(:txt)");
    $query->bindParam(':txt',$texto);
    
    if($query->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!')</script>";
    } else {
        echo "<script>alert('Cadastro não realizado!')</script>";
    }
}

?>

<div class="content-cadastro">

    <form method="post">

        <label for="texto">Texto</label>
        <input type="text" class="input" name="texto">

        <div class="buttons">
            <button class="cancelar">Cancelar</button>
            <button class="cadastrar" name="btnCad">Cadastrar</button>
        </div>

    </form>

</div>

<?php

include_once("../includes/footer.php");

?>