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
      <a href="?page=edit">แจ้งสถานะ</a>
      <a href="?page=announce">แจ้งรายละเอียดค่าเช่า</a>
      <a href="?page=payment">ตรวจสอบหลักฐานการชำระเงิน</a>
    </div>

    <div class="out">
      <a href="?page=logout">Sign Out</a>
    </div>

  </div>
  <div class="test"><h1 style="background-color:white;">ตรวจสอบหลักฐานการชำระเงิน</h1><form action="" method="POST">
      <div class="bdate"><input type="month" name="bdate" placeholder="เลือกเดือน" value="
  <?php 
  if(isset($_POST['bdate'])){ echo $_POST['bdate'];}
  ?>">
  <input type="submit" value="submit" name="submit"></div>
  </form>

    <?php
    $dato = date('m-Y');
    if(isset($_POST['submit'])){
      $dato = $_POST['bdate'];
    $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
    mysqli_set_charset($conn, "utf8");
    $query = mysqli_query($conn, "SELECT *,payment.day as dayss
        FROM payment join bill on(payment.bill_id = bill.id)
        WHERE payment.day like '%$dato%'"
        );
      if ($query->num_rows > 0) {
        ?><table>
          <tr style="background-color:#74B4DE;color:white;">
          <th>เลขที่</th>
            <th>ห้อง</th>
              <th>ประจำเดือน</th>
              <th>ราคา</th>
              <th>จากธนาคาร</th>
              <th>วันที่</th>
              <th>เวลา</th>
              <th>สลิป</th>
              <th>สถานะ</th>
          </tr>
          <?php
        // output data of each row
        while ($row = $query->fetch_assoc()) {
              echo "<tr><td>".$row['bill_id']."</td>";
              echo "<td>". $row["room"] ."</td>";
              echo "<td>". date('M-Y',strtotime($row["day"])) ."</td>";
              echo "<td>".$row['cost']."</td>";
              echo "<td>".$row['frombank']."</td>";
              echo "<td>".date('d-M-Y',strtotime($row['dayss']))."</td>";
              echo "<td>".$row['when']."</td>";
              echo "<td>".$row['pictureurl']."</td>";
              echo "<td>".$row['state']."</td>";
          }
        } else {
          echo "0 results";
        }
      }
       $conn->close();
        ?>
        </tr>
      </table>

  </div>
<!-- kals;dkls;adk;lakdl;sk askd;laskl;daksldkaskfl;jdf kjwwifj akfklfljg  kaifkadi kkw fms;kfl ;wlfkkfld fakl;fka'sf'; -->
 
  <!-- <div class="bdate"><input type="date" name="bdate" placeholder="เลือกเดือน" value="
  <?php 
  // if(isset($_POST['bdate'])) echo $_POST['bdate']
  ?>"> -->
   <!-- <form action="" method="POST">
  <div class="bid">เปลี่ยนสถานะ<input type="text" name="bid" placeholder="Bill_id" required> -->
  <!-- <input type="submit" value="enter">
  </div></form>  สำคัญมั้ง-->
  <!-- <table>
        <tr style="background-color:#74B4DE;color:white;">
            <th>id</th>
          <th>room</th>
          <th>cost</th>
          <th>date</th>
          <th>status</th>
        </tr> -->
  <?php
  if(isset($_POST['bid']) or isset($_POST['bid']))
        {
          $bid = $_POST['bid'];

        ?>

    
<?php
     $conn1 = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
     mysqli_set_charset($conn1, "utf8");
    $query1 = mysqli_query($conn1, "SELECT * 
        FROM bill
        Where bill.id = '".$bid."'"
        );
      
    if ($query1->num_rows > 0) {
        // output data of each row
        while ($row1 = $query1->fetch_assoc()) {
                        $bid = $row1['id'];
            echo "<tr><td>".$row1['id']."</td>";
            echo "<td>".$row1["room"]."</td>";
            echo "<td>".$row1['cost']."</td>";
            echo "<td>".date('d/M/Y ', strtotime($row1['day'])) ."</td>";
            echo "<td>".$row1['state']."</td></tr>";?>
            <tr><td></td><td></td><td></td><td></td><td>
            <?php
            if ($row1["state"] != "ชำระแล้ว") {               
            ?>
            <form action="" method="POST">
                <!-- <select name = "select" id="select">
                <option>ชำระแล้ว<option>
                        <option>ชำระแล้ว</option> -->
            <!-- </select> -->
            <input type="text" name="done" value="ชำระแล้ว">
            <input value="submit" type="submit"  name='submit'>
            </form>
            
            </td>

            <?php 
            
            if(isset($_POST['submit']))
              echo("<script>alert('ส่งฟอร์ม สำเร็จ!!')</script>");
              $bid = $row1['id'];
              $sql1 = "UPDATE  bill   SET state ='ชำระแล้ว' WHERE id='$bid'";
              if (mysqli_query($conn1, $sql1)) {
              
                 echo "Record updated successfully";
                
              } else {
                  echo "Error updating record: " . mysqli_error($conn);
            }
          }
        


          
          }
        } else {
          echo "ไม่มีข้อมูล";

        }
        $conn1->close();
    }
    

    ?>
</div>
</body>

</html>