<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/fixman.css" />
    <title>แจ้งซ่อม</title>
    <style>html,body{overflow-x: hidden;}</style>
    <style>html,body{overflow-y: hidden;}</style>
</head>
<body>
<div class="menu">
    <div class="index" onclick="location.href='?page=home';">
        <img src="../image/logo1.jpg" style="width: 4em; height: 1.5em;"></a> 
    </div>

    <div class="navbar">
        <a href="?page=fixman">แจ้งซ่อม</a>
    </div>

    <div class="out">
        <a href="?page=logout">Sign Out</a>
    </div>

</div>

<div class="info">
    <div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
    mysqli_set_charset($conn, "utf8");

    $query = mysqli_query($conn, "SELECT *
        FROM repairdetails join  repair 
        on (repairdetails.repair_id = repair.repair_id)"
        );
    if ($query->num_rows > 0) {?>
        <div class="textinfo">
        <table style="width:100%;border=1" >
            <tr>
            <th>ลำดับ</th>  
            <th>อาการ/ปัญหา</th>
            <th>อนุญาติให้เข้าห้อง</th>
            <th>ห้อง</th>
            <th>สถานะ</th>

            </tr>
            
            <?php
        // output data of each row
        while ($row = $query->fetch_assoc()) {
            echo "<tr><td>".$row['repair_id']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['allowstatus']."</td>";
            echo "<td>".$row['room']."</td>";
            echo "<td>".$row['state']."</td></tr>";
            
        }}?>
        
        </table>
        </div>
        
    </div>
</div>

    
</body>
</html>