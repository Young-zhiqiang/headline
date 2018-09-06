<?php
include '../core/db.php';
class news extends data{
    public function index(){
            if(isset($_GET['q'])){
                $cid = $_GET['q'];
            }else{
                $cid = 1;
            }

        $category = $this->pdo->query("select * from category")->fetchAll();

        $rows = $this->pdo ->query("select * from headline where cid=".$cid)->fetchAll();
        include '../views/index/index.html';
    }
//    public function update(){
//        if(isset($_GET['q'])){
//            $cid = $_GET['q'];
//        }else{
//            $cid = 1;
//        }
//        $category = $this->pdo->query("select * from category")->fetchAll();
//
//        $rows = $this->pdo ->query("select * from headline where cid=".$cid)->fetchAll();
//    }
}

//分类页面
class category extends data{
    public function index(){
        $results = $this->pdo ->query("select * from category")->fetchAll();
        include '../views/index/index2.html';
    }
    public function update(){
        $this->pdo -> query("update category set is_dfult='{$_GET["r"]}' where id=".$_GET['i']);
    }

}


























//include '../core/db.php';
//
//class page extends db
//{
//  const PER_PAGE = 4;
//
//  public function index()
//  {
////接收分类id
//    if (isset($_GET['cid'])) {
//      $cid = $_GET['cid'];
//    } else {
//      $cid = 1;
//    }
////接收页数
//    if (isset($_GET['page'])) {
//      $page = $_GET['page'];
//    } else {
//      $page = 1;
//    }
////分类
//    $category = $this->pdo
//      ->query('select * from news_category where is_default = "1" ')
//      ->fetchAll();
//
////某个分类下的总条数
//    $num = $this->pdo
//      ->query('select count(*) as total from news where cid =' . $cid)
//      ->fetch()['total'];
//
////总页数
//    $page_total = ceil($num / $this::PER_PAGE);
//
////新闻
//    $news = $this->pdo
//      ->query(
//        'select * from news where cid= ' . $cid . ' limit '.$this::PER_PAGE.' offset ' . ($page - 1) * $this::PER_PAGE
//      )
//      ->fetchAll();
//
//    include '../views/index/index.html';
//  }
//
//  public function category()
//  {
//    include '../views/index/category.html';
//  }
//
//  public function search()
//  {
//    include '../views/index/search.html';
//  }
//}
