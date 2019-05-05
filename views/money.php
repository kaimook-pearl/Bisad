<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" media="screen" href="css/moneys.css" />
  <title>การชำระเงิน</title>
  <style>html,body {overflow-x: hidden;}</style>
  <style>html,body{overflow-y: hidden;}</style>
</head>
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

    $query = mysqli_query($conn, "SELECT *
        FROM user JOIN payment on(user.username = payment.room) 
        JOIN bill on(payment.room = bill.room) 
        WHERE user.id = " . $_SESSION['id'].
        " ORDER BY bill.day DESC"  
        );
    if ($query->num_rows > 0) {
      ?><table>
        <tr style="background-color:#74B4DE;color:white;">
          <th>หลักฐาน</th>
          <th>รายการ</th>
          <th>สถานะ</th>
          <th>Action</th>
        </tr>



        <?php
        // output data of each row
        while ($row = $query->fetch_assoc()) {
          echo "<tr>
                <td style=\"padding-left:60px;padding-right:60px;\">Picture: " . $row["pictureurl"]; ?>
          </td>
          <td><?php
              $ddate = strtotime($row["day"]);
              echo "<div style=\"text-align:left;\"> id: " . $row["id"] . "<br></div>";
              echo "<div style=\"text-align:left;\">เดือน: ";
              echo date('M/Y ', $ddate) . "<br></div>";
              echo "<div style=\"text-align:left;\">ราคา: " . $row["cost"]."<div>";
              ?>
          </td>
          <td>
            <?php
            if ($row["state"] != "ชำระแล้ว") {               
              echo "<p style=\"background:black;color:white;border-radius:10vw;\">".$row["state"] . "</p></td>";
              echo "<td><button class=button1 onclick=\"location.href='?page=submoney';\" style=\"background:#4476D6;color:white;\">แจ้งชำระเงิน</button></td>";
            } else {
              echo "<p style=\"background:#1B0CEE;color:white;border-radius:10vw;\">".$row["state"] . "</p></td>";
              echo "<td><button class=button1 onclick=\"location.href='?page=submoney';\" style=\"background:#177E66;color:white;\">Print</button></td>";
            }
          }
        } else {
          echo "0 results";
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