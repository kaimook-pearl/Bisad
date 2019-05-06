<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/submoney.css" />
    <title>แจ้งชำระเงิน</title>
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
<?php
$query1 = mysqli_query($conn,"SELECT * FROM user 
JOIN bill on(user.username = bill.room) WHERE user.id = ".$_SESSION['id']);
$row1 = $query1->fetch_assoc();?>

<div class="blog">
        <div class="blogx">
            <h3>ส่งหลักฐาน</h3>
            <div class="row">
                <form action="" method="POST">
                <div class = "col-5">
                    <h5>เลขที่บิล:</h5>
                    <input type="text" id="id" name="bid" size="5" placeholder="bxxxx" required>  
                </div>
                <div class = "col-5">
                    <h5>จากธนาคาร:</h5>
                    <input type="text" id="bank" name="bank">  
                </div>
                <div class = "col-5">
                    <h5>ไปยังธนาคาร:</h5>
                    <input type="text" id="tobank" name="tobank">             
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class = "col-5">
                    <h5>ใบเสร็จสลิปการโอน:</h5>
                    <input type="file" name="upFile" id="upFile" accept=".png,.gif,.jpg,.webp" required>    
                </div>
                <div class = "col-5">
                    <h5>ยอดที่ต้องชำระ:</h5>
                    <input type="text" id="total" name="total" value="<?php echo $row1['cost'];?>">                
                </div>
            <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class = "col-5">
                    <h5>วันที่โอนชำระเงิน:</h5>
                    <input type="date" id="day" name="day">  
                </div>
                <div class="col-5">
                    <h5>เวลาที่โอนชำระเงิน:</h5>
                    <input type="time" id="time" name="time">  
                </div>
                <div class = "col-5">
                    <input type="submit" id="save" name="save">               
                </div>
            </form>
            </div>  
        </div>
</div>
<?php

    $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
    mysqli_set_charset($conn, "utf8");
    $query = mysqli_query($conn,"SELECT * FROM user 
     WHERE user.id = ".$_SESSION['id']);
    $row = $query->fetch_assoc();
    echo $row['username'];
    $room = $row['username'];

    if (isset($_POST['save'])) {
        $id = $_POST['bid'];
        $bank = $_POST['bank'];
        $tobank = $_POST['tobank'];
        $slip = $_POST['upFile'];
        $total = $_POST['total'];
        $day = $_POST['day'];
        $time = $_POST['time'];

        $sql = "INSERT INTO payment   Value ('$id','$room','$bank','$tobank','$day','$time',$total,'$slip')";

        if (mysqli_query($conn, $sql)) {
              
            echo("<script>alert('สำเร็จ!')</script>");
             header('refresh:1; ?page=submoney');
           
         } else {
             
             echo "Error insert record: " . mysqli_error($conn);
       }
     }


?>
<?php
/* [ERROR CHECKING] */
//     if($_FILES['upFile']['size']==0) { die("No file selected"); }
// if (exif_imagetype($_FILES['upFile']['tmp_name'])===false) { die("Not an image"); }

// /* [INSERT IMAGE] */
// // DO YOUR ERROR CHECKING HERE IF YOU WANT
// try {
//   $stmt = $conn->prepare("INSERT INTO payment (pictureurl) VALUES (?)");
//   $stmt->execute([$_FILES["upFile"]["name"], file_get_contents($_FILES['upFile']['tmp_name'])]);
// } catch (Exception $ex) {
//   echo "ERROR - " . $ex->getMessage();
//   die();
// }

// /* [ON COMPLETE] */
// // DO SOMETHING, MAYBE REDIRECT THE USER TO ANOTHER PAGE
// // header("Location: http://example.com/abc.php");
// echo "OK";
?>
 <!-- <img src="5-fetch.p?f=image.jpg"> -->
    
</body>
</html>