<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/moneys.css" />
    <title>การชำระเงิน</title>
    <style>html,body{overflow-x: hidden;}</style>
    <style>html,body{overflow-y: hidden;}</style>
</head>
<!-- <style>table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  tr:nth-child(even) {
    background-color: #dddddd;
  }</style> -->
<body>
<div class="menu">
    <div class="index" onclick="location.href='?page=home';">
        <img src="image/logo1.jpg" style="width: 4em; height: 1.5em;"></a> 
    </div>

    <div class="navbar">
        <a href="?page=fix">แจ้งซ่อม</a>
        <a href="?page=money">การชำระเงิน</a>
        <a href="?page=profile">แก้ไขข้อมูล</a>
    </div>

    <div class="out">
        <a href="?page=logout">Sign Out</a>
    </div>

</div>
<div class="test">
<?php
        $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
        mysqli_set_charset($conn, "utf8");
                    
        $query = mysqli_query($conn,"SELECT payment.pictureurl,bill.room as broom,bill.id as bid,bill.cost as bcost,
        bill.status as bstatus ,bill.date as bdate 
        FROM user JOIN payment on(user.username = payment.room) 
        JOIN bill on(payment.room = bill.room) 
        WHERE user.id = ".$_SESSION['id']);
          if ($query->num_rows > 0) {
          ?><table>
          <tr>
            <th>หลักฐาน</th>
            <th>รายการ</th>
            <th>สถานะ</th>
            <th>Action</th>
            </tr>

            

          <?php 
            // output data of each row
              while($row = $query->fetch_assoc()) { 
                echo "<tr>
                <td>Picture: ". $row["pictureurl"];?>
                </td>
                <td><?php
                $ddate = strtotime($row["bdate"]);
                echo "id: ". $row["bid"]."<br>";
                echo "งวด: ";
                echo date('d-M-Y ', $ddate)."<br>";
                echo "ราคา: ". $row["bcost"];
                ?>
                </td>
                <td>
                <?php
                echo $row["bstatus"]."</td>";
                if ($row["bstatus"]!= "ชำระแล้ว") {
                 echo "<td><button class=button1 onclick=\"location.href='?page=submoney';\">แจ้งชำระเงิน</button></td>";
                }
                else {
                  echo "<td><button class=button1 onclick=\"location.href='?page=submoney';\">Print</button></td>";
                }
      
                }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
            ?>
            </tr>

</div>

<div class="logo1" onclick="location.href='?page=submoney';">
    <img src="image/logo.png" style="width:4em;">
</div>
    
</body>
</html>