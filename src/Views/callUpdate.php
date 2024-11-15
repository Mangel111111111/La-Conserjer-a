<?php
    require_once("Components/layout.php");
?>

<body>
    <?php
        require_once("Components/header.php");
    ?>

    <main>
        <h2>MODIFICAR INCIDENCIA</h2>

        <form action="?action=updateSQL&id=<?php echo $data['call']->id; ?>" method="post">
            <div id="span">
                <span>Id</span>
                <span>Nº de Habitación</span>
                <span>Incidencia</span>
                <span>Fecha</span>
                <span>Confirmar</span>
            </div>

            <div id="input">
                <input type="text" name="room" readonly value="<?php echo $data['call']->id; ?>">
                <input type="text" name="room" required value="<?php echo $data['call']->room; ?>">
                <textarea area-label="Width textarea" type="text" name="issue" required ><?php echo $data['call']->issue; ?></textarea>
                <input type="date" name="dateTime" required value="<?php echo $data['call']->dateTime; ?>">
                <input type="submit" id="buttonConfirm" value="">
            </div>

            <input type="reset" value="Limpiar" id="buttonReseat" readonly>
           
        </form>
    </main>

    <?php
        require_once("Components/footer.php");
    ?>
</body>