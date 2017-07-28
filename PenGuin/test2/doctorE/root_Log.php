<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/21
 * Time: 下午 02:55
 */
include('htmlhead.php');
mainheader();
include('st1.php');
nvbar(0);

if(isset($_SESSION['username'])&&$_SESSION['usertype']==1){
    include ('dbconnect.php');
}else{
    echo '<script> alert("您尚無登入或尚無權限查看此頁面")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}



if($_SESSION['usertype']==1){
    $query = "SELECT * FROM user_log";
}else{
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}

$result = $mysqli->query($query);


//echo $num;
?>


<!--<td class="table-active">...</td>-->
<!--<td class="table-success">...</td>-->
<!--<td class="table-warning">...</td>-->
<!--<td class="table-danger">...</td>-->
<!--<td class="table-info">...</td>-->
<table style="width: 50%;margin: 50px auto auto auto"class="table">

    <thead>
    <tr class="bg-primary">
        <th>No.</th>
        <th>更動人</th>
        <th>被更動使用者</th>
        <th>帳號</th>
        <th>密碼</th>
        <th>手機</th>
        <th>信箱</th>
        <th>Line</th>
        <th>權限</th>
        <th>更動時間</th>
    </tr>
    </thead>

    <?php
    $i=1;
    while ($row = mysqli_fetch_array($result)) {
//        $row=$result->fetch_row();
        ?>

        <?php
        switch ($row[7]) {
            case 1:
                echo '<tr class="bg-warning">';
                break;
            case 2:
                echo '<tr class="bg-danger">';
                break;
            case 3:
                echo '<tr class="bg-success">';
                break;
            default :
                echo '<tr class="bg-info">';
                break;
        }
        echo "<th>"; echo $i++;echo "</th>";
//        echo "
//
//                    <td>$row[1]</td>
//                    <td>$row[2]</td>
//                    <td>$row[4]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        for($x=3;$x<8;$x++){
            if($row[$x]!=null){
                echo "<td> <i class=\"fa fa-check\" aria-hidden=\"true\"></i></td>";
            }else{
                echo "<td> </td>";
            }
        }
        echo "<td>$row[8]</td>";
        echo "<td>$row[9]</td>";
        ?>

<!--        <td>-->
<!--            <a href="root_Update2.php?id=--><?php //echo "$row[2]"; ?><!--" class="btn btn-large btn-warning">修改資料</a>-->
<!--            <a onclick="return confirm('確定要刪除?')" href="deleteUser.php?id=--><?php //echo "$row[2]"; ?><!--"class="btn btn-large btn-danger">刪除</a>-->
<!--        </td>-->
        </tr>
        <?php
    }
    ?>



    </tbody>
</table>
