<?php
include '../core/db.php';
function https_request($url,$data=""){
    // 开启curl
    $ch=curl_init();
    // 设置传输选项
    // 设置传输地址
    curl_setopt($ch, CURLOPT_URL, $url);
    // 以文件流的形式返回
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    /**/
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书下同
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);


    if ($data) {
        // 以post方式
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }

    $headers = array("Content-type: application/json;charset=UTF-8","Accept: application/json","Cache-Control: no-cache", "Pragma: no-cache");

    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );

    // 发送curl
    $request=curl_exec($ch);
    $tmpArr=json_decode($request,TRUE);
    if (is_array($tmpArr)) {
        return $tmpArr;
    }else{
        return $request;
    }
    // 关闭资源
    curl_close($ch);
}
class dynamic extends data{
    public function index(){
        if(isset($_GET['page'])){
            $page = (int)$_GET['page'];
        }else{
            $page = 1;
        }
        $sql = 'select * from wechart order by ctime desc limit 4 offset '.($page-1)*4;
       $data = $this->pdo->query($sql)->fetchAll();
       echo json_encode($data);
    }
    public function insert(){
        $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=wxdc03c85bc1164b44&secret=0705ab1ea1c63857441f3ed292ce884a&js_code='.$_GET['code'].'&grant_type=authorization_code';
        $relaut = https_request($url);
        if(isset($_GET['address'])){
            $address = $_GET['address'];
        }else{
            $address = '学府街平衍路口开通大厦';
        }
        $stmt = $this->pdo->prepare("insert into wechart (openid,user_avatar,use_name,content,img_urls,pulish_address) values (?,?,?,?,?,?)");
        $stmt->bindValue(1,$relaut['openid']);
        $stmt->bindValue(2,$_GET['user']);
        $stmt->bindValue(3,$_GET['name']);
        $stmt->bindValue(4,$_GET['content']);
        $stmt->bindValue(5,$_GET['urls']);
        $stmt->bindValue(6,$address);
        $stmt->execute();
        echo $relaut['openid'];
    }
    public function upload(){
//        print_r($_FILES);
        $src = $_FILES['g']['tmp_name'];
        $file_name = $_FILES['g']['name'];
        $dist = './assets/wechart/'.$file_name;
        move_uploaded_file($src, $dist);
        echo 'https://blacknight.applinzi.com/assets/wechart/'.$file_name;
    }
    public function user_feed(){
        $user = $this->pdo->query("select * from wechart where openid=".$_GET['openid'])->fetchAll();
        echo json_encode($user);
    }
}