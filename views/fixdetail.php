
<!DOCTYPE html>
<?php
    require_once "connect.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/fix_pp.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>แจ้งซ่อม</title>
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
        <div class="textinfo">
            <form method="post" action="?page=addfix&id=<?php echo $_SESSION['id']?>">
                <label for="lblbuild">อาคาร : </label>
                <label for="lblbuild" name="building"><?php echo $building;?></label>

                <label for="lblbuild">ห้อง : </label>
                <label for="lblbuild" name="room"><?php echo $room;?></label><br><br>

                <label for="lblbuild">เลือกงานซ่อม</label><br><br>
                <select name="drpGid" id="drpGid" onchange="onTypeChange(this);">
                    <option value="0" selected="selected">เลือกงานซ่อม</option>
                    <optgroup label="อุปกรณ์ไฟฟ้า">
                        <option value="ตู้เย็น">ตู้เย็น</option>
                        <option value="ทีวี">ทีวี</option>
                        <option value="ปลั๊กไฟเต้ารับ">ปลั๊กไฟเต้ารับ</option>
                        <option value="พัดลม">พัดลม</option>
                        <option value="สวิทซ์เปิด-ปิดไฟระเบียง">สวิทซ์เปิด-ปิดไฟระเบียง</option>
                        <option value="สวิทซ์เปิด-ปิดไฟห้องนอน">สวิทซ์เปิด-ปิดไฟห้องนอน</option>
                        <option value="สวิทซ์เปิด-ปิดไฟห้องน้ำ">สวิทซ์เปิด-ปิดไฟห้องน้ำ</option>
                        <option value="สายไฟฟ้า">สายไฟฟ้า</option>
                        <option value="หลอดไฟระเบียง">หลอดไฟระเบียง</option>
                        <option value="หลอดไฟห้องนอน">หลอดไฟห้องนอน</option>
                        <option value="หลอดไฟห้องน้ำ">หลอดไฟห้องน้ำ</option>
                        <option value="เครื่องทำความเย็นแอร์">เครื่องทำความเย็นแอร์</option>
                        <option value="เครื่องทำน้ำอุ่น">เครื่องทำน้ำอุ่น</option>
                        <option value="เบรคเกอร์-สะพานไฟ">เบรคเกอร์-สะพานไฟ</option>
                        <option value="ไฟฉุกเฉิน">ไฟฉุกเฉิน</option>
                        <option value="ไมโครเวป">ไมโครเวป</option>
                    </optgroup>
                    <optgroup label="อุปกรณ์ประปา">
                        <option value="ก๊อกน้ำ">ก๊อกน้ำ</option>
                        <option value="ก๊อกน้ำอ่างซักผ้า">ก๊อกน้ำอ่างซักผ้า</option>
                        <option value="ก๊อกน้ำอ่างล้างหน้า">ก๊อกน้ำอ่างล้างหน้า</option>
                        <option value="ท่อน้ำ">ท่อน้ำ</option>
                        <option value="ปั๊มน้ำ">ปั๊มน้ำ</option>
                        <option value="ผักบัวห้องอาบน้ำ">ผักบัวห้องอาบน้ำ</option>
                        <option value="ฝาปิดชักโครก">ฝาปิดชักโครก</option>
                        <option value="ลูกลอยโถชักโครก">ลูกลอยโถชักโครก</option>
                        <option value="วาล์วน้ำฝักบัว">วาล์วน้ำฝักบัว</option>
                        <option value="สายชำระ">สายชำระ</option>
                        <option value="สายฝักบัวห้องอาบน้ำ">สายฝักบัวห้องอาบน้ำ</option>
                        <option value="หัวฉีดฟ๊อกกี้">หัวฉีดฟ๊อกกี้</option>
                        <option value="อ่างล้างหน้า">อ่างล้างหน้า</option>
                        <option value="โถปัสสาวะ">โถปัสสาวะ</option>
                        <option value="โถส้วม">โถส้วม</option>
                    </optgroup>
                    <optgroup label="อุปกรณ์ครุภัณฑ์">
                        <option value="กระจกห้องน้ำ">กระจกห้องน้ำ</option>
                        <option value="กลอนประตูห้อง">กลอนประตูห้อง</option>
                        <option value="ตู้เสื้อผ้า">ตู้เสื้อผ้า</option>
                        <option value="ที่ล็อคกุญแจห้อง">ที่ล็อคกุญแจห้อง</option>
                        <option value="บานพักประตูเสื้อผ้า">บานพักประตูเสื้อผ้า</option>
                        <option value="บานพับประตูห้อง">บานพับประตูห้อง</option>
                        <option value="บานเกล็ด">บานเกล็ด</option>
                        <option value="ประตูห้อง">ประตูห้อง</option>
                        <option value="ประตู้ห้องน้ำ">ประตู้ห้องน้ำ</option>
                        <option value="ฝ้าเพดาน">ฝ้าเพดาน</option>
                        <option value="พื้นกระเบื้อง">พื้นกระเบื้อง</option>
                        <option value="มุ้งลวด">มุ้งลวด</option>
                        <option value="ลูกบิดห้อง">ลูกบิดห้อง</option>
                        <option value="ลูกบิดห้องน้ำ">ลูกบิดห้องน้ำ</option>
                        <option value="เตียงนอน">เตียงนอน</option>
                        <option value="โต๊ะแต่งตัว">โต๊ะแต่งตัว</option>
                    </optgroup>
                    <optgroup label="อื่นๆ">
                        <option value="อื่นๆ">อื่นๆ</option>
                    </optgroup>
                </select><br><br>

                <label for="lblbuild">อาการ/ปัญหา</label><br><br>
                <textarea name="txtcuslog" id="txtcuslog" placeholder="อาการหรือปัญหา.."></textarea><br><br>

                <label for="lblbuild">เบอร์โทรศัพท์ติดต่อ</label><br><br>
                <input type="text" id="txtcusphone" name="txtcusphone" placeholder="เบอร์โทรศัพท์ติดต่อ.." value=""><br><br>

                <label for="lblentry">กรณีผู้เช่าไม่อยู่ห้อง อนุญาตให้ช่างเข้าซ่อมหรือไม่?</label><br><br>
                <p>
                    <input name="rdoisentry" type="radio" value="อนุญาต">
                    อนุญาต
                    <input name="rdoisentry" type="radio" value="ไม่อนุญาต" checked="">ไม่อนุญาต

                    <br>
                    <br>

                    <input type="submit" value="ส่งคำแจ้งซ่อม">
                </p>
            </form>
        </div>
    </div>

</body>

</html>

<?php
    // if (isset($_POST['txtbuildid'])) {
    //     $room = $_POST['room'];
    //     mysqli_query($conn, "INSERT INTO repairdetails (room) value ('$room')") or die(mysqli_error($conn));
    // }
?>
