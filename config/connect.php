<? header("content-type:text/html; charset=utf-8");
// 3.���� ����
$connect = mysql_connect("localhost", "tnc", "sky1004") or die(mysql_error());

// 4.�����ͺ��̽� ����
mysql_select_db("tnc") or die(mysql_error());
mysql_query("set names utf8", $connect);
?>