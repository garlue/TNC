<? header("content-type:text/html; charset=utf-8");
  if($_SERVER["HTTP_REFERER"]){

// 3.���� ����
include 'connect.php';

// 5.������ �ۼ�
$query = "SELECT * FROM  `tnc_map` WHERE  `status` =  'Y'";


//6.������ �����Ͽ� $result �� ����
$result = mysql_query($query, $connect);

// 7.������ ���� üũ�� ���� ���� ����
$i = 0;

// 8.�����Ͱ� ���� ���� �ݺ��ؼ� ���� �� �پ� �б�
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
    // 9.������ ���� üũ�� ���� ������ 1 ������Ŵ
    $i++;
}

// 11.��� �ݱ�
mysql_close($connect);
}
?>