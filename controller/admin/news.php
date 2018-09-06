<?php
include '../core/db.php';

//新闻页方法
//class news extends data{
//
//    public function actionindex(){
//        $news = $this->pdo->query("select * from headline") -> fetchAll();
//        include "../views/admin/news.html";
//    }
//    public function actionremove(){
//        $this->pdo->query("delete from headline where id=".$_GET['i']);
//    }
//    public function actionadd(){
//        $this->pdo->query("insert into headline (title,des,url,img,cid,types) value ('{$_GET['t']}','{$_GET['d']}','{$_GET['u']}','{$_GET['i']}','1','')");
//    }
//
//
//
//
//
//
//
//
//}
//新闻页方法
class news extends data{
    public function actionindex(){
        $news = $this->pdo->query("select * from headline")->fetchAll();
        include '../views/admin/news.html';
    }
}