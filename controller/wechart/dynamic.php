<?php
include '../core/db.php';
class dynamic extends data{
    public function index(){
        $sql = 'select * from wechart';
       $data = $this->pdo->query($sql)->fetchAll();
       echo json_encode($data);
    }
    public function insert(){
        if(isset($_GET['urls'])){
            $urls = $_GET['urls'];
        }else{
            $urls = 'https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=3559817402,2365570412&fm=27&gp=0.jpg;https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=4252978712,688727476&fm=27&gp=0.jpg';
        }
        if(isset($_GET['time'])){
            $time = $_GET['time'];
        }else{
            $time = '2018年9月11日';
        }
        if(isset($_GET['address'])){
            $address = $_GET['address'];
        }else{
            $address = '学府街平衍路口开通大厦';
        }
        $stmt = $this->pdo->prepare("insert into wechart (user_avatar,use_name,content,img_urls,pulish_time,pulish_address) values (?,?,?,?,?,?)");
        $stmt->bindValue(1,$_GET['user']);
        $stmt->bindValue(2,$_GET['name']);
        $stmt->bindValue(3,$_GET['content']);
        $stmt->bindValue(4,$urls);
        $stmt->bindValue(5,$time);
        $stmt->bindValue(6,$address);
        echo $stmt->execute();

//        if(isset($_GET['urls'])){
//            $urls = $_GET['urls'];
//        }else{
//            $urls = 'https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=3559817402,2365570412&fm=27&gp=0.jpg;https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=4252978712,688727476&fm=27&gp=0.jpg';
//        }
//        if(isset($_GET['time'])){
//            $time = $_GET['time'];
//        }else{
//            $time = '2018年9月11日';
//        }
//        if(isset($_GET['address'])){
//            $address = $_GET['urls'];
//        }else{
//            $address = '学府街平衍路口开通大厦';
//        }
//        $stmt = $this->pdo->prepare("insert into wechart (user_avatar,use_name,content,img_urls,pulish_time,pulish_address) values  (?,?,?,?,?,?)");
//        $stmt->bindValue(1,$_GET['avatar']);
//        $stmt->bindValue(2,$_GET['name']);
//        $stmt->bindValue(3,$_GET['content']);
//        $stmt->bindValue(4,$urls);
//        $stmt->bindValue(5,$time);
//        $stmt->bindValue(6,$address);
//        echo $stmt->execute();
    }
}