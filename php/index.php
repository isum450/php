<?php
/*echo "Hello world<h1>php 하기 시렁</h1>";
echo 20020509;

print(12345);
print("Hello World<h1>php 하고 시퍼</h1>");

$A = "이수민";
echo $A;

define("Fuck", 184829);
const FFuck = "19283";
echo Fuck;
echo FFuck;

$Num1 = 1523;
$Num2 = 27;
$Sum = $Num1+ $Num2;
echo $Sum;

$Num1 = "1523";
$Num2 = "27";
$Sum = $Num1 + $Num2;

echo $Sum;

$a = "abc";
$b = "def";
echo $a."Fuck".$b;

define("CHAR", "대한민국");
echo CHAR."은 자유민주국가";

const CHAR = "미국";


$a = "자";

if($a == "남자"){
    echo "남자입니다";
}else if($a == "여자"){
    echo "여자입니다";
}
else {
    echo "중성입니다";
}

switch($a){
    case"남자":
        echo "남자입니다.";
        break;
    case"여자":
        echo "여자입니다.";
        break;
    default:
        echo "모르겠네요";
        break;
}
*/
?>

for($a = 0; $a <= 10; $a ++)
{
    echo $a."<br />";
    
    if($a%3 == 0)
    {
        echo "====================="."<br />";
    } else if($a == 6){
        echo "---------------------"."<br />";
    }
    else{
        echo "--  --  --  --  --  --"."<br />";
    }
}


$a = 1;
while($a<145){
    echo $a."<br />";
    $a++;

}
$a = 1;
do{
    echo $a."<br />";
    $a++;
}while($a < 145);

*/
$list = array
(
    "가" => 8,
    "아이고" => 75
);
//echo "<pre>";
//print_r($list);
//echo"</pre>";
?>

<!DOCTYPE html>
<html charset="en">
<head>
    <title>테이블 배열 연습</title>
    <style>
        table{
            border-collapse:collapse ;
        }
        th, td {
            border: solid 1px;
        }
        th{
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>시험성적표</h1>

    <table>
        <thead>
            <tr>
                <th>번호</th>
                <th>이름</th>
                <th>성적</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>201911180</td>
                <td>이수환</td>
                <td>1.3</td>
            </tr>
            <tr>
                <td>2021202032</td>
                <td>이수민</td>
                <td>4.34</td>
            </tr>
            <tr>
                <td>?</td>
                <td>?</td>
                <td>?</td>
            </tr>
            <tr>
                <td>?</td>
                <td>?</td>
                <td>?</td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <td>총점</td>
                <td colspan="2">??</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
