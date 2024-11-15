<?php
    require_once("Components/layout.php")
?>

<body>
<<<<<<< HEAD
=======
<?php
    require_once("Components/header.php")
?>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nº de Habitación</th>
                    <th>Incidencia</th>
                    <th>Fecha</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php  
                    foreach($data["call"] as $call){
                        echo "
                            <tr>
                                <td>{$call->getId()}</td>
                                <td>{$call->getRoom()}</td>
                                <td>{$call->getIssue()}</td>
                                <td>{$call->getDateTime()}</td>

                                <td>
                                    <a href='?action=delete&id={$call->getId()}'>
                                        <button type='button'>Delete</button>
                                    </a>
                                </td>
                                <td>
                                    <a href='?action=update&id={$call->getId()}'>
                                        <button type='button'>Update</button>
                                    </a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </main>
>>>>>>> origin/dev
    <?php
        require_once("Components/header.php")
    ?>
        <main>
            <div id="list">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nº de Habitación</th>
                            <th>Incidencia</th>
                            <th>Fecha</th>
                            <th>Eliminar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <div>
                        <tbody>
                            <?php 
                                foreach($data["call"] as $call){
                                    echo "
                                        <tr>
                                            <td>{$call->id}</td>
                                            <td>{$call->room}</td>
                                            <td>{$call->issue}</td>
                                            <td>{$call->dateTime}</td>

                                            <td>
                                                <a href='?action=delete&id={$call->id}'>
                                                    <img class='delete' src='./public/img/icons/deleteIconBlack.png' alt='boton para eliminar'>
                                                </a>
                                            </td>
                                            <td>
                                                <a href='?action=update&id={$call->id}'>
                                                    <img class='update' src='./public/img/icons/addIconBlack.png' alt='boton para editar'>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </div>
                </table>
            </div>
        </main>
        <?php
        require_once("Components/footer.php")
    ?>
</body>
