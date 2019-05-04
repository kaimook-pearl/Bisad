<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/profile.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>แก้ไขข้อมูล</title>
    <style>html,body{overflow-x: hidden;}</style>
    <style>html,body{overflow-y: hidden;}</style>
</head>
<body>
<div class="menu">
    <div class="index" onclick="location.href='?page=home';">
        <img src="../image/logo1.jpg" style="width: 4em; height: 1.5em;"></a>
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
<div class = "big-box">
    <div id = topic>
        <h4>แก้ไขข้อมูลส่วนตัว</h4>
    </div>
    <div class="row">
        <div class="col-1"></div>
            <div class = "col-5">
                <h5>Username:</h5>
                <input type="text" id="username" name="username">  
            </div>
            <div class = "col-5">
                <h5>Confirm New Password:</h5>
                <input type="text" id="connewPass" name="connewPass">                
            </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
            <div class = "col-5">
                <h5>Old Password:</h5>
                <input type="text" id="oldPassword" name="oldPassword">  
            </div>
            <div class = "col-5">
                <h5>E - Mail:</h5>
                <input type="text" id="email" name="email">                
            </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
            <div class = "col-5">
                <h5>New Password:</h5>
                <input type="text" id="newPassword" name="newPassword">  
            </div>
            <div class = "col-5">
            <button type="button" id="save" name="save">Save</button>               
            </div>
        <div class="col-1"></div>
    </div>                 
</div>


    
</body>
</html>
