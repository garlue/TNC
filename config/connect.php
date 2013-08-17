<? header("content-type:text/html; charset=utf-8");
// 3.디비와 연결
$connect = mysql_connect("localhost", "tnc", "sky1004") or die(mysql_error());

// 4.데이터베이스 선택
mysql_select_db("tnc") or die(mysql_error());
mysql_query("set names utf8", $connect);
?>