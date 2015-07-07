<?php

require_once("libs/dao.php");

function obtenerCategorias(){
    $categorias = array();
    $selectQuery = "SELECT * from categorias;";
    $categorias = obtenerRegistros($selectQuery);
    return $categorias;
}

function actualizarCategoria($categoria){
  if($categoria && is_array($categoria)){
    $sqlUpdate = "update categorias set ctgdsc='%s', ctgest='%s' where ctgid=%d;";
    $sqlUpdate = sprintf($sqlUpdate,
                  valstr($categoria["ctgdsc"]),
                  valstr($categoria["ctgest"]),
                  valstr($categoria["ctgid"])
                );
    return ejecutarNonQuery($sqlUpdate);
  }
  return false;
}

function borrarCategoria($categoriaID){
  if($categoriaID){
    $sqlDelete = "delete from categorias where ctgid=%d;";
    $sqlDelete = sprintf($sqlDelete,
                  valstr($categoriaID)
                );
    return ejecutarNonQuery($sqlDelete);
  }
  return false;
}










?>
