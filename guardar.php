<?php 
if(isset($_GET['titulo']) && isset($_GET['descripcion'])){
    echo $_GET['titulo']."<br/>";
    echo $_GET['descripcion']."<br/>";
}