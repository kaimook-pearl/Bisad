<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/fix_p.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>แจ้งซ่อม</title>
    <!-- <style>
        html,
        body {
            overflow-x: hidden;
        }
    </style>
    <style>
        html,
        body {
            overflow-y: hidden;
        }
    </style> -->
    <style>
        .w3-btn {
            width: 150px;
            color: white;
            background-color: blue;
        }
    </style>
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

    <div class="info">
        <div>
            <div class="textinfo">
                <div style="text-align:right;">
                    <button class="w3-btn w3-round-xlarge">+ ADD</button>
                    <hr>



    <?php
        $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
        mysqli_set_charset($conn, "utf8");
                    
        $query = mysqli_query($conn,"SELECT r.description, rp.status, rp.repair_id
        FROM user u
        JOIN repairdetails r
        ON (u.username = r.room)
        JOIN repair rp
        ON (r.repair_id = rp.repair_id)
        WHERE u.id = ".$_SESSION['id']);
          if ($query->num_rows > 0) {
          ?><table style="width:100%" border="1">
          <tr>
            <th>คิวที่</th>
            <th>อาการ/ปัญหา</th>
            <th>สถานะ</th>

            </tr>

            

          <?php 
            // output data of each row
              while($row = $query->fetch_assoc()) { 
                echo "<tr>
                <td>". $row["repair_id"]. "</td>
                <td>". $row["description"];?>
                </td>
                <td><?php
                echo  $row["status"]."<br>";
                }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
            ?>
            </tr>

</div>


</body>

</html>
