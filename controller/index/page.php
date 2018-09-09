<?php
include '../core/db.php';
//首页
//class news extends data{
//    public function index(){
//            if(isset($_GET['q'])){
//                $cid = $_GET['q'];
//            }else{
//                $cid = 1;
//            }
//
//        $category = $this->pdo->query("select * from category")->fetchAll();
//
//        $rows = $this->pdo ->query("select * from headline where cid=".$cid)->fetchAll();
////        var_dump($rows);
//        include '../views/index/index.html';
//    }
//    public function index_data(){
//        if(isset($_GET['q'])){
//            $cid = $_GET['q'];
//        }else{
//            $cid = 1;
//        }
//
//        $category = $this->pdo->query("select * from category")->fetchAll();
//
//        $rows = $this->pdo ->query("select * from headline where cid=".$cid)->fetchAll();
//        echo json_encode($rows);
//    }
//}
//首页
class news extends data{
    public function index(){
        if(isset($_GET['cid'])){
            $cid=$_GET['cid'];
        }else{
            $cid=1;
        }
        $category = $this->pdo->query("select * from category where is_dfult=1")->fetchAll();
        $rows = $this->pdo->query("select * from headline where cid=".$cid)->fetchAll();
        include '../views/index/index.html';
    }



    //测试
//    public function index_data(){
//        if(isset($_GET['cid'])){
//            $cid=$_GET['cid'];
//        }else{
//            $cid=1;
//        }
//
//        $rows = $this->pdo->query("select * from headline where cid=".$cid)->fetchAll();
//        echo json_encode($rows);
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

//搜索页面
class search extends data{
    const PAGE_total=5;
    public function search_html(){
        if(isset($_GET['k'])){
            $keyword = $_GET['k'];
        }else{
            $keyword = '';
        }
        if(isset($_GET['p'])){
            $page = $_GET['p'];
        }else{
            $page = 1;
        }
        $relauts = $this->pdo->query("select * from headline where title like '%".$keyword."%' limit ".$this::PAGE_total." offset ".($page-1)*$this::PAGE_total)->fetchAll();
        include '../views/index/search.html';
    }
    public function search_data(){
        if(isset($_GET['k'])){
            $keyword = $_GET['k'];
        }else{
            $keyword = '';
        }
        if(isset($_GET['p'])){
            $page = $_GET['p'];
        }else{
            $page = 1;
        }
        $relauts = $this->pdo->query("select * from headline where title like '%".$keyword."%' limit ".$this::PAGE_total." offset ".($page-1)*$this::PAGE_total)->fetchAll();
        echo json_encode($relauts);
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
