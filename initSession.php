<?php
include_once 'Metier.php';
session_start ();

$sessionname="todolist1023f7";

if (!isset ($_SESSION[$sessionname])) {
    $_SESSION[$sessionname]=new TODOList () ;
}

$listTodo=&$_SESSION[$sessionname];

?>