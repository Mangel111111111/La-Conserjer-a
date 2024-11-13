<?php
    require_once("Components/layout.php")
?>

<body>
<?php
    require_once("Components/header.php")
?>
    <main>

        <div>
            <a href="?action=create">
                <button type="button">+</button>
            </a>
        </div>

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
                                <td>{$call->id}</td>
                                <td>{$call->room}</td>
                                <td>{$call->issue}</td>
                                <td>{$call->dateTime}</td>

                                <td>
                                    <a href='?action=delete&id={$call->id}'>
                                        <button type='button'>Delete</button>
                                    </a>
                                </td>
                                <td>
                                    <a href='?action=update&id={$call->id}'>
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
    <?php
    require_once("Components/footer.php")
?>
</body>