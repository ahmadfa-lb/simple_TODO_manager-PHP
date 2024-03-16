<?php
include 'Metier.php';
include 'initsession.php';
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <?php
        $cat = $_GET['categorie'];
        $res = $listTodo->getTODOByCategory($cat);

        echo '<table border = "1">';
        foreach ($res as $todo) {
            echo '<tr>';
            echo '   <td>' . $todo->titre . '</td>   ';
            echo '  <td>' . $todo->description . '</td>   ';
            echo '  <td>' . $todo->categorie . '</td>   ';

            echo '</tr>';
        }



        echo '</table>';
        ?>
    </body> 
</html>