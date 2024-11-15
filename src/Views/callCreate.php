<?php
    require_once("Components/layout.php");
?>

<body>
    <?php
        require_once("Components/header.php");
    ?>

    <main>
        <h2>AÑADIR UNA NUEVA INCIDENCIA</h2>

        <form action="?action=store" method="post">
            <div id="span">
                <span>Nº de Habitación</span>
                <span>Incidencia</span>
                <span>Fecha</span>
                <span>Confirmar</span>
            </div>

            <div id="input">
                <input type="text" name="room" required placeholder="Nº de Habitación">
                <textarea area-label="Width textarea" type="text" name="issue" required placeholder="Descripción de la incidencia"></textarea>
                <input type="date" name="dateTime" required>
                <input type="submit" id="buttonConfirm" value="">
            </div>

            <input type="reset" value="Limpiar" id="buttonReseat" readonly>
        </form>
    </main>

    <?php
        require_once("Components/footer.php");
    ?>
</body>