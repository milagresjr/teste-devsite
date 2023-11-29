<?php

include_once("../includes/header.php");

include_once "../db.php";


$query = $pdo->prepare("SELECT * FROM texto");
$query->execute();
$texts = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($texts);
?>

<div class="content-view">

    <div class="view">

        <?php 
            foreach($texts as $text):
        ?>
        <div class="text">
            <?php 
                echo $text['texto'];
            ?>
        </div>
        <?php 
            endforeach;
        ?>

        <a href="cadastro.php?pg=1">Voltar</a>

    </div>

</div>


<?php

include_once("../includes/footer.php");

?>