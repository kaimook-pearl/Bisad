<!DOCTYPE html>
<?php 
if(isset($_SESSION['id'])){
    header("?page=login");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/resident.css" />
    <title>Homepage</title>
    <style>html,body{overflow-x: hidden;}</style>
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

<div class="info">
    <div>
        <div class="textinfo">
            <?php
                    $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
                    mysqli_set_charset($conn, "utf8");

                    $query = mysqli_query($conn,"SELECT * FROM user JOIN resident on(user.username = resident.room_id) WHERE user.id = ".$_SESSION['id']);
                    if ($query->num_rows > 0) {
                        // output data of each row
                        while($row = $query->fetch_assoc()) {
                            echo "ตึก: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["building"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ."Room: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["room"]. "<br>";
                            echo "Name: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["name"]. "<br>". " E-mail: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["email"]. "<br>".
                            " Phone: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["phone"]. "<br>".  " Room-detail: "."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["roomdetail"]. "<br>". " Furniture: "."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["furniture"]. "<br>";
                            echo "Price: "."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["price"]. "<br>". " water-unit: "."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["waterunit"]. "<br>". "Elect-unit: "."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["electunit"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
            ?>
            
        </div>
        
    </div>
</div>




    
</body>
</html>
