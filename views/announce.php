<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" media="screen" href="css/moneys.css" />
  <title>แจ้งชำระเงิน</title>
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

  </div>
  <div class="test">
    
    <?php
    $day = date('d-m-Y',strtotime("now"));
    $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
    mysqli_set_charset($conn, "utf8");
    $count = mysqli_query($conn, "SELECT COUNT(*) as count FROM bill") or die(mysqli_error($conn));
    $count2 = $count->fetch_assoc();
    $order = "b".str_pad(intval($count2['count'])+1, 4, '0', STR_PAD_LEFT);

?><form action="" method="POST">
  <!-- <div class="broom"><input type="text" name="broom" placeholder="เลือกห้อง" required> -->
  <!-- <div class="bdate"><input type="date" name="bdate" placeholder="เลือกเดือน" value="
  <?php 
  // if(isset($_POST['bdate'])) echo $_POST['bdate']
  ?>"> -->
  <input type="submit" value="refresh" name="refresh">
  </div></form>
  <?php
  if(isset($_POST['refresh']))
        {
          $room = $_POST['refresh'];
          // $room1 = $room;
          // $days = $day;
        }
        ?>
        <form action="" method="POST">
        <table>
        <tr style="background-color:#74B4DE;color:white;">
            <th>id</th>
          <th>room</th>
          <th>cost</th>
          <th>date</th>
          <th>status</th>
        </tr>
        <tr>
        <td><?php echo $order;?></td>
        <!-- <td><div class="broom"><input type="text" name="broom" placeholder="ห้อง" value="
        <?php 
        // if(isset($_POST['broom'])){  $room3 = $_POST['broom']; echo $room3;}
        ?>" disabled></td> -->
        <td><div class="broom"><input type="text" name="broom" placeholder="เลือกห้อง" required></td>

<td><div class="cost"><input type="text" name="cost" placeholder="ค่าเช่าเดือนนี้" required></td>
<td><div class="bdate"><input type="date" name="bdate" placeholder="เลือกเดือน" required value="<?php if(isset($_POST['bdate'])) echo $_POST['bdate']?>">
 </td>
<td><input type="submit" value="submit" name="submit"></td>
    </tr>    </form>
        
<?php
     
    $query = mysqli_query($conn, "SELECT * 
        FROM bill
        ORDER BY day DESC, id DESC"
        );
      $day = isset($_POST['bdate']) ? $_POST['bdate']:"";
    if ($query->num_rows > 0) {
        // output data of each row
        while ($row = $query->fetch_assoc()) {
            echo "<tr><td>".$row['id']."</td>";
            echo "<td>".$row["room"]."</td>";
            echo "<td>".$row['cost']."</td>";
            echo "<td>".date('d/M/Y ', strtotime($row['day'])) ."</td>";
            echo "<td>".$row['state']."</td></tr>";

          }
        } else {
          echo "ไม่มีข้อมูล";
        }


        // $conn->close();
        ?>
                </table>
    
  </div>
</body>

</html>
 <?php
          if(isset($_POST["cost"])){
            // $bilid = $_POST["billid"];
            $cost = $_POST["cost"];
            $room1 = $_POST["broom"];
         
            // echo $order;
            // echo $room;
            // echo $cost;
            $day = date('Y-m-d',strtotime($day));
            if (!$conn) 
            {
              echo "not connect";
            }
          
        $sql = "INSERT INTO bill   Value ('$order','$room1',$cost,'ยังไม่ชำระ','$day')";
        if (!mysqli_query($conn,$sql)) {
            echo "not insert";
        }
        // else {
        //     echo("<script>alert('ส่งฟอร์ม สำเร็จ!!')</script>");
        //     header('refresh:2;?page=announce');
        // }
      }
        // header('refresh:0;?page=announce');
        // if(isset($_POST['broom']))
        // {
        //   $room = $_POST['broom'];
        // }
      
        $conn->close();
            ?>
            