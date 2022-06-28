<?php

    interface Table{
        public function insertQuery();
        public function deleteQuery();
        public function readQuery();
        public function updateQuery();
    }

?>