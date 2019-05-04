<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/submoney.css" />
    <title>แจ้งชำระเงิน</title>
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

<div class="blog">
    <div>
        <div class="blogx">
            <h3>ส่งหลักฐาน</h3>
            <form>
            <p>
                <label for="fname">จากธนาคาร</label>
                <input type="text" id="fname" name="fname">
            </p>
            <p>
                <label for="lname">ไปยังธนาคาร</label>
                <input type="text" id="lname" name="lname">
            </p>
            <p>
                <label for="fname">ยอดที่ต้องชำระ</label>
                <input type="text" id="fname" name="fname">
            </p>
            <p>
                <label for="fname">วันที่โอนชำระเงิน</label>
                <input type="text" id="fname" name="fname"placeholder="xx/xx/xxxx">
            </p>
            <p>
                <label for="fname">เวลาที่โอนชำระเงิน</label>
                <input type="text" id="fname" name="fname"placeholder="xx:xx">
            </p>
            </form>
        </div>
    </div>
</div>





    
</body>
</html>