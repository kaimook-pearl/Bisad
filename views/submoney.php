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

<div class="blog">
        <div class="blogx">
            <h3>ส่งหลักฐาน</h3>
            <div class="row">
                
                <div class = "col-5">
                    <h5>จากธนาคาร:</h5>
                    <input type="text" id="bank" name="bank">  
                </div>
                <div class = "col-5">
                    <h5>ใบเสร้จสลิปการโอน:</h5>
                    <input type="text" id="pic" name="pic"> 
                    <input type="file" name="myFile">               
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class = "col-5">
                    <h5>ไปยังธนาคาร:</h5>
                    <input type="text" id="tobank" name="tobank">  
                </div>
                <div class = "col-5">
                    <h5>ยอดที่ต้องชำระ:</h5>
                    <input type="text" id="total" name="total">                
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
                    <button type="button" id="save" name="save">Save</button>               
                </div>
                
            </div>  
        </div>
</div>





    
</body>
</html>