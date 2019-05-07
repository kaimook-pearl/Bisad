<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/admin.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>html,body{overflow-x: hidden;}</style>
    <style>html,body{overflow-y: hidden;}</style>
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
<div class="info">
        <div>
            <div class="textinfo">
                <?php
                        $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
                        mysqli_set_charset($conn, "utf8");

                        $query = mysqli_query($conn,"SELECT * FROM user JOIN administrator on(user.username = administrator.id) WHERE user.id = ".$_SESSION['id']);
                        if ($query->num_rows > 0) {
                            // output data of each row
                            while($row = $query->fetch_assoc()) {
                                echo "Name: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["name"]. "<br>". " Phone: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["phone"]. "<br>".
                                " เลขทีบัญชี: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["actnum"]. "<br>
                                 ธนาคาร: "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["bank"]. "<br>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                ?>
                
            </div>
</body>
</html>
