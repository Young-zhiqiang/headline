<?php
include '../core/db.php';

//首页方法
class index extends data{
    public function actionindex(){
        include "../views/admin/adminindex.html";
    }
}


