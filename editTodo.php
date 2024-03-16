 
<?php
include 'Metier.php';
include 'initSession.php';

$UC = 'FIRSTEDIT';

if (isset ($_GET ['end']))
    $UC = 'END' ;

if ($UC == 'END') {
    header ('Location:menu_view.html'); }

if (isset ($_GET[ 'add' ]))
    $UC = 'ADD';

if (isset ($_GET['delete']))
    $UC = 'DELETE';

if (isset ($_GET ['update']))
   $UC = 'UPDATE';

if (isset ($_GET  ['submitUpdate']))
    $UC = 'SUBMITUPDATE';
?>


<html>
    <head>
      <meta charset="UTF-8">
        <title></title>
</head>
   <body>
     
   <link href="ui_elements/todo_styles.css" rel="stylesheet" type="text/css" />
	   


<?php   
if ($UC == 'FIRSTEDIT') {
    include 'TODOListEdit.php';

include 'form_add_todo.html';  
}

if ($UC == 'ADD') {

    $titre=$_GET['titre'];
    $description=$_GET['description'];
    $categorie=$_GET['categorie'];
   
    $todo =new TODO($titre,  $description ,$categorie) ;  
    $listTodo->add($todo);
   
    include 'TODOListEdit.php';
    include 'form_add_todo.html';
}

if ($UC =='DELETE') {
    $index =$_GET['index'];
    $listTodo->delTODO($index);
    
    include 'TODOListEdit.php';
    include 'form_add_todo.html';
}
if ($UC == 'UPDATE') {
    include 'TODOListEdit.php';
    include 'form_update_todo.php';
    
}
if ($UC == 'SUBMITUPDATE') {
    $titre=$_GET['titre'];
    $description=$_GET['description'];
    $categorie=$_GET['categorie'];
    
    $todo =new TODO($titre,  $description ,$categorie) ;
    $index = $_GET['index'];
    $listTodo->updateTODO($index,$todo);
    include 'TODOListEdit.php';
    include 'form_add_todo.html';
}

?>




   </body> 
   </html>