<?php 
header("content-type:text/html;charset=utf-8");
$act=$_REQUEST['act'];
if($act=="reg"){
    $mes=reg();
}elseif($act=="login"){
    $mes=login();
}
function reg(){
    $arr['username'] = $_POST['username'];
    $arr['password'] = md5($_POST['password']);
    $arr['gender'] = $_POST['gender'];
    $arr['major'] = $_POST['major'];
    $arr['birthday'] = $_POST['birthday'];
    $arr['phone'] = $_POST['phone'];
    $arr['qq'] = $_POST['qq'];
    $arr['email'] = $_POST['email'];
    $arr['collage'] = $_POST['collage'];
    $temp = $_POST['hobby'];
    $arr['hobby'] = implode(",", $temp);
    $conn = mysql_connect("localhost", "root", "") or die("数据库连接失败".mysql.error());
    
    mysql_select_db("ausspeace") or die ("没有数据库".mysql.error());
    mysql_query("set names 'utf8' ");
    $sql = "insert into speace_user(username, password, gender, major, birthday, phone, qq, email, collage, hobby) values ('$arr[username]', '$arr[password]', '$arr[gender]', '$arr[major]',' $arr[birthday]','$arr[phone]', '$arr[qq]', '$arr[email]', '$arr[collage]', '$arr[hobby]')";
    if(mysql_query($sql)){
        $mes="<h2>您好<font color=#c67114>". $arr['username']."</font>注册成功!</h2><br/><h2 id='return'>3秒钟后跳转到登陆页面!</h2><meta http-equiv='refresh' content='3;url=login.php'/>";
    }else{
        $mes="注册失败!<br/><a href='register.php'>重新注册</a>|<a href='index.php'>查看首页</a>";
    }
    return $mes;
}
function login(){
    $mysql_servername = "localhost"; //主机地址
    $mysql_username = "root"; //数据库用户名
    $mysql_password =""; //数据库密码
    $mysql_database ="ausspeace"; //数据库
    mysql_connect($mysql_servername , $mysql_username , $mysql_password);
    mysql_select_db($mysql_database); 
    $name=$_POST['username'];
    $passowrd=md5($_POST['password']);
    if ($name && $passowrd){
     $sql = "SELECT username, password FROM speace_user WHERE username = '$name' and password='$passowrd'";
     mysql_query('set names utf8');
     $res = mysql_query($sql);
     $rows=mysql_num_rows($res);
    if($rows){
        session_start();
        $_SESSION['username']=$name;
        $mes="<h2>您好<font color=#c67114>". $name."</font>登陆成功！</h2><br/><h2>3秒钟后跳转到首页</h2><meta http-equiv='refresh' content='3;url=index.php'/>";
    }
    }else {
       $mes="登陆失败！<a href='login.php'>重新登陆</a>";
    }
    return $mes;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Aus' space</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style/css/style.css" />
    <link rel="logo icon" href="style/images/z.ico">
    <script language="javascript" src="style/js/check-reg.js"></script>
    <style type="text/css">
    h2{
        margin-top: 10px;
        margin-bottom: 30px;
    }
    </style>
</head>
<body id="top">
<div id="header-wrap"><header>
 
        <hgroup>
            <h1><a href="index.html">Aus</a></h1>
            <h3>个人主页</h3>
        </hgroup>
 
        <nav>
            <ul>
                <li id="current"><a href="register.html">注册</a></li>
                <li><a href="login.php">登陆</a></li>
            </ul>          
        </nav>
</header></div>
 
<div id="register-wrap"><article id="register" class="clearfix">
    <center>
        <?php 
        if($mes){
            echo $mes;
        }
        ?>
    </center>
   
</article></div>
 
<!-- footer
============================================================================== -->
<footer class="clearfix">
 
    <p class="footer-left">
        <a href="index.html">关于本站</a> |
        <a href="index.html">官方微博</a> |
        <a href="index.html">常见问题</a> |
        <a href="index.html">问题反馈</a>
        &copy; 2014 赵彬宇 
    </p>
 
    <p class="footer-right">
        <a class="back-to-top" href="#top">返回顶部</a>
    </p>
 
<!-- /footer -->
</footer>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>