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
      <a href="?page=announce">แจ้งรายละเอียดค่าเช่า</a>
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
  <div class="bid"><input type="text" name="bid" placeholder="Bill_id" required>
  <!-- <div class="bdate"><input type="date" name="bdate" placeholder="เลือกเดือน" value="
  <?php 
  // if(isset($_POST['bdate'])) echo $_POST['bdate']
  ?>"> -->
  <input type="submit" value="enter">
  </div></form>
  <table>
        <tr style="background-color:#74B4DE;color:white;">
            <th>id</th>
          <th>room</th>
          <th>cost</th>
          <th>date</th>
          <th>status</th>
        </tr>
  <?php
  if(isset($_POST['bid']) or isset($_POST['bid']))
        {
          $bid = $_POST['bid'];

        ?>

    
<?php
     
    $query = mysqli_query($conn, "SELECT * 
        FROM bill
        Where bill.id = '".$bid."'"
        );
        
    if ($query->num_rows > 0) {
        // output data of each row

        while ($row = $query->fetch_assoc()) {
                        $bid = $row['id'];
            echo "<tr><td>".$row['id']."</td>";
            echo "<td>".$row["room"]."</td>";
            echo "<td>".$row['cost']."</td>";
            echo "<td>".date('d/M/Y ', strtotime($row['day'])) ."</td>";
            echo "<td>".$row['state']."</td></tr>";?>
            <tr><td></td><td></td><td></td><td></td><td>
            <?php
            if ($row["state"] != "ชำระแล้ว") {               
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
              $bid = $row['id'];
              $sql = "UPDATE  bill   SET state ='ชำระแล้ว' WHERE id='$bid'";
              if (mysqli_query($conn, $sql)) {
              
                 echo "Record updated successfully";
                  header('refresh:1; ?page=edit');
                
              } else {
                  echo "Error updating record: " . mysqli_error($conn);
            }
          }
        


          
          }
        } else {
          echo "ไม่มีข้อมูล";

        }
    
    }
        // $conn->close();
        ?>
                </table>
                
                <!-- <form action="" method="POST">
                <select name ="test" id="test">
                <option><option>
                        <option>ชำระแล้ว</option>
            </select>
            <input value="submit" type="submit">
            </form> -->
            
            <?php         
  
            
            ?>
    
  </div>
</body>

</html>
 <?php
    //       if(isset($_POST["cost"])){
    //         // $bilid = $_POST["billid"];
    //         $cost = $_POST["cost"];
    //         // $datee = $_POST["broo"];
         
    //         // echo $order;
    //         // echo $room;
    //         // echo $cost;
    //         // echo $days;
    //         if (!$conn) 
    //         {
    //           echo "not connect";
    //         }
    //       }
    //       if(isset($_POST["submit"])){
    //     $sql = "INSERT INTO bill   Value ('$order','$room1',$cost,'ยังไม่ชำระ','$days')";
    //     if (!mysqli_query($conn,$sql)) {
    //         echo "not insert";
    //     }
    //     else {
    //         echo("<script>alert('ส่งฟอร์ม สำเร็จ!!')</script>");
    //         header('refresh:2; ?page=announce');
    //     }
    //   }
        // if(isset($_POST['broom']))
        // {
        //   $room = $_POST['broom'];
        // }
      
        $conn->close();
            ?>
            