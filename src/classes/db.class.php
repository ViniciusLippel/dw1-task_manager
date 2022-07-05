<?php

include_once "../interfaces/table.interface.php";

    class Db{

        public function insert(Table $table){
            $pdo = Connection::getInstance(); 
            $insert = $pdo->prepare($table->insertQuery());
            // echo $table->insertQuery();
            $insert->execute();
            header("location:../index.php");
        }

        public function delete(Table $table){
            $pdo = Connection::getInstance(); 
            $insert = $pdo->prepare($table->deleteQuery());
            $insert->execute();
            header("location:../index.php");
        }
    }

?>