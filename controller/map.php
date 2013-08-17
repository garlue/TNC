<? header("content-type:text/html; charset=utf-8");
  if($_SERVER["HTTP_REFERER"]){

// 3.디비와 연결
include 'connect.php';

// 5.쿼리문 작성
$query = "SELECT * FROM  `tnc_map` WHERE  `status` =  'Y'";


//6.쿼리문 적용하여 $result 에 대입
$result = mysql_query($query, $connect);

// 7.데이터 갯수 체크를 위한 변수 설정
$i = 0;

// 8.데이터가 있을 동안 반복해서 값을 한 줄씩 읽기
while($data = mysql_fetch_array($result)){
echo $data[map_srl]."<>";
echo $data[name]."<>";
echo $data[content]."<>";
echo $data[durability]."<>";
echo $data[Mdurability]."<>";
echo $data[top]."<>";
echo $data[left]."<>";
echo $data[simple]."<>";
echo $data[icon]."|";
    // 9.데이터 갯수 체크를 위한 변수를 1 증가시킴
    $i++;
}

// 11.디비 닫기
mysql_close($connect);
}
?>