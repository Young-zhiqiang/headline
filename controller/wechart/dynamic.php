<?php
include '../core/db.php';
class dynamic extends data{
    public function index(){
        $sql = 'select * from wechart';
       $data = $this->pdo->query($sql)->fetchAll();
       echo json_encode($data);
    }
}