<?PHP 
echo '<table border = "1">';
foreach ($listTodo->list as $index=>$todo){
    echo '<tr>';
    echo '   <td>'.$todo->titre.'</td>   ';
     echo '  <td>'.$todo->description.'</td>   ';
     echo '  <td>'.$todo->categorie.'</td>   ';
     
     echo '  <td><a href="editTodo.php?update=true&index='.$index.'"><img src="ui_elements/update_bt.png" width="25" heigth="25"/>  </a> </td>   ';
     echo '  <td><a href="editTodo.php?delete=true&index='.$index.'"><img src="ui_elements/minus_bt.png"/>  </a> </td>   ';
     echo '</tr>';
}

      
//echo '<img  src="update_bt.png" width="25" heigth="25" />';

echo '</table>';

?>