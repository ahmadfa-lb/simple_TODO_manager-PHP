<br>
<h2>TODO Form</h2>
<?php 
    $index = $_GET['index'];
    $todo=$listTodo->getTODO($index);
    $strnor="";
    $strsec="";
    $strurg="";
    switch ($todo->categorie){
        case "secondaire":$strsec='selected=""';break;
        case "normale":$strnor='selected=""';break;
        case "urgente":$strurg='selected=""';break;
    }
?>
<form action="editTodo.php">
<table border="0"> 
        <tr>
            <td>Titre</td>
            <td><input type="text" name="titre" size="40" value="<?php echo $todo->titre; ?>" /></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name="description" rows="4" cols="31" ><?php echo $todo->description; ?> </textarea></td>
        </tr>
        <tr>
            <td>Catégorie</td>
            <td><select name="categorie">
                    <option <?php echo $strsec; ?>>secondaire</option>
                    <option <?php echo $strnor; ?>>normale</option>
                    <option <?php echo $strurg; ?>>urgente</option>
                </select></td>
        </tr>
        <tr>
            <td></td>
            <td ALIGN=RIGHT><input type="submit" value="update" name="submitUpdate" />
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="submit" value="cancel" name="cancelUpdate" />
                 </td>
        </tr>
</table>
    <input type="hidden" name="index" value="<?php echo $index; ?>"/>
</form>