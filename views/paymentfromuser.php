<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" media="screen" href="css/moneys.css" />
  <title>การชำระเงิน</title>
  <!-- <style>html,body {overflow-x: hidden;}</style>
  <style>html,body{overflow-y: hidden;}</style> -->
</head>
<body>
  <div class="menu">
    <div class="index" onclick="location.href='?page=home';">
      <img src="image/logo1.jpg" style="width: 4em; height: 1.5em;"></a>
    </div>

    <div class="navbar">
      <a href="?page=edit">แก้ไข</a>
      <a href="?page=announce">การชำระเงิน</a>
      <a href="?page=payment">ตรวจสอบหลักฐานการชำระเงิน</a>
    </div>

    <div class="out">
      <a href="?page=logout">Sign Out</a>
    </div>

  </div>
  <div class="test"><form action="" method="POST">
      <div class="bdate"><input type="month" name="bdate" placeholder="เลือกเดือน" value="
  <?php 
  if(isset($_POST['bdate'])){ echo $_POST['bdate'];}
  ?>">
  <input type="submit" value="submit"></div>
  </form>

    <?php
    if(isset($_POST['bdate'])){
      $dato = $_POST['bdate'];
    }
    $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
    mysqli_set_charset($conn, "utf8");
    $query = mysqli_query($conn, "SELECT *
        FROM payment join bill on(payment.bill_id = bill.id)"
        );
    if ($query->num_rows > 0) {
      ?><table>
        <tr style="background-color:#74B4DE;color:white;">
          <th>ห้อง</th>
          <th>รายการ</th>
        </tr>



        <?php
        // output data of each row
        while ($row = $query->fetch_assoc()) {
              echo "<tr><td>".$row['bill_id']."</td>";
              echo "<td>". $row["room"] ."</td>";
              echo "<td>". date('d-M-Y',strtotime($row["day"])) ."</td>";
              echo "<td>".$row['cost']."</td>";
              echo "<td>".$row['frombank']."</td>";
              echo "<td>".$row['tobank']."</td>";
              echo "<td>".$row['day']."</td>";
              echo "<td>".$row['when']."</td>";
              echo "<td>".$row['pictureurl']."</td>";
              
            
          }
        } else {
          echo "0 results";
        }
        if(isset($_POST['done'])){
          $done = $_POST['done'];
          echo $done;
        }
        $conn->close();
        ?>
        </tr>
      </table>

  </div>
  <div class="logo1" onclick="location.href='?page=submoney';">
    <img src="image/logo.png" style="width:4em;">
  </div>



</body>

</html>