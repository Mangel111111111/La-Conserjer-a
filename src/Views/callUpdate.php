<?php
    require_once("Components/layout.php");
?>

<body>
    <?php
        require_once("Components/header.php");
    ?>

    <main>
        <h2>MODIFICAR INCIDENCIA</h2>

        <form action="?action=updateSQL&id=<?php echo $data['call']->getId(); ?>" method="post">
            <div id="span">
                <span>Id</span>
                <span>Nº de Habitación</span>
                <span>Incidencia</span>
                <span>Fecha</span>
                <span>Confirmar</span>
            </div>

            <div id="input">
                <input type="text" name="room" readonly value="<?php echo $data['call']->getId(); ?>">
                <input type="text" name="room" required value="<?php echo $data['call']->getRoom(); ?>">
                <textarea area-label="Width textarea" type="text" name="issue" required ><?php echo $data['call']->getIssue(); ?></textarea>
                <input type="date" name="dateTime" readonly value="<?php echo $data['call']->getDateTime(); ?>">
                <input type="submit" id="buttonConfirm" value="">
            </div>

            <input type="reset" value="Limpiar" id="buttonReseat" readonly>
        </form>
    </main>

    <?php
        require_once("Components/footer.php");
    ?>
</body>