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
            <div class="col-25">
                <label for="fname">จากธนาคาร:</label>
            </div>
            <div class="col-75">
                <input type="text" id="sbank" name="sbank">
            </div>
            <div class="col-25">
                <label for="lname">ไปยังธนาคาร:</label>
            </div>
            <div class="col-75">
                <input type="text" id="tbank" name="tbank">
            </div>
            </form>
        </div>
    </div>
</div>





    
</body>
</html>