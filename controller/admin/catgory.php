<?php
include '../core/db.php';

//分类页方法
class classification extends data{
    public function actionindex(){
        include "../views/admin /classification.html";
    }
}
