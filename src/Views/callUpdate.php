<?php
    require_once("Components/layout.php");
?>

<body>
    <?php
        require_once("Components/header.php");
    ?>

    <main>
        <h2>Añadir nueva incidencia</h2>

        <a href="./index.php">
            <button type="button" id="button-cancel" >Cancelar</button>
        </a>

        <form action="?action=updateSQL&id=<?php echo $data['call']->getId(); ?>" method="post">
            <div> 
                <span>Id</span>
                <input type="text" name="room" readonly value="<?php echo $data['call']->getId(); ?>">
            </div>

            <div>
                <span>Nº de Habitación</span>
                <input type="text" name="room" required value="<?php echo $data['call']->getRoom(); ?>">
            </div>

            <div>
                <span>Incidencia</span>
                <textarea area-label="Width textarea" type="text" name="issue" required ><?php echo $data['call']->getIssue(); ?></textarea>
            </div>

            <div>
                <span>Fecha</span>
                <input type="date" name="dateTime" readonly value="<?php echo $data['call']->getDateTime(); ?>">
            </div>

            <div>
                <input type="submit" value="Confirmar">
                <input type="reset" value="Borrar">
            </div>
        </form>


    </main>

    <?php
        require_once("Components/footer.php");
    ?>
</body>