<? header("content-type:text/html; charset=utf-8");
  if($_SERVER["HTTP_REFERER"]){
$ID = $_POST['id'];
$PW = $_POST['password'];
$nowtimes = date("Y-m-d",time());
$login_result = "0";
// 3.디비와 연결
include 'connect.php';

// 5.쿼리문 작성
$query = "SELECT `member_srl`,`denied`, `nick_name` FROM `xe_member` WHERE  `user_id` =  '".$ID."' AND `password` =  '".$PW."' LIMIT 1";
//6.쿼리문 적용하여 $result 에 대입
    $result = mysql_query($query, $connect);
    $data = mysql_fetch_array($result);
echo $data[member_srl]."/";
echo $_SERVER['REMOTE_ADDR']."/";
if ($data[member_srl]) {
  
  if ($data['denied']=="N") {
  $login_result = "true";
$query = "UPDATE `tnc_achievement` SET `count_login`=`count_login`+1 WHERE `member_srl` = '".$data[member_srl]."'";
$result = mysql_query($query, $connect);

  } elseif ($data['denied']=="Y") {
  $login_result = "true(denied user)";
  }
} else {
  $login_result = "false";
}
echo $login_result."/";
echo $data[nick_name]."/";
echo $nowtimes;
$query = "INSERT INTO `tnc_logs` (`logs_srl` ,`member_srl` ,`user_id`,`type` ,`result` ,`ip` ,`date` )VALUES (NULL , '".$data[member_srl]."', '".$ID."', 'login', '".$login_result."', '".$_SERVER['REMOTE_ADDR']."', '".date("Y-m-d H:i:s",time())."')";
$result = mysql_query($query, $connect);

// 11.디비 닫기
mysql_close($connect);
}
?>