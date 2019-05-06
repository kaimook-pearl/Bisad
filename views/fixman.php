<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/fixman.css" />
    <title>แจ้งซ่อม</title>
    <!-- <style>html,body{overflow-x: hidden;}</style>
    <style>html,body{overflow-y: hidden;}</style> -->
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
    $rowcount = mysqli_num_rows($query);
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
            <form action="" method="POST">
            <?php
            $x = 1;
        // output data of each row
        while ($row = $query->fetch_assoc()) {
            ?><tr><td><input type="hidden" name="hdnID<?=$x;?>" size="5" value="<?=$row["repair_id"];?>">
            <input type="text" name="txtID<?php echo $x;?>" size="5" value="<?php echo $row["repair_id"];?>"></td>
            <?php
            echo "<td>".$row['repair_id']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['allowstatus']."</td>";
            echo "<td>".$row['room']."</td>";
            echo "<td>".$row['state'];
            if ($row['state'] == 'สำเร็จ') {
                echo "<input value=\"สำเร็จ\" disabled>";
            }else{
                echo "<select name=\"select\">
                <option value=\"0\" name=\"done\">รอดำเนินการ</option>
                <option value=\"1\" name=\"done\">สำเร็จ</option></select></td>";
                ?>
                <?php
                
            }
            echo "<td><input type=\"text\" name=\"comment$x\" placeholder=\"comment$x\"></td></tr>";
            $x = $x+1 ;
            
        }}?>
        
        </table>
        </div>
        <input value="change" type="submit" name="submit"></form>
        
        <?php
            $rowcount = mysqli_num_rows($query);
            
            printf("Result set has %d rows.\n<br>",$rowcount);
            if (isset($_POST['submit'])) {
            
                
            // mysqli_free_result($query);
                 for ($i=1; $i < (int)$rowcount; $i++) { 
                     if(isset($_POST['comment'.$i])){
                        $comment = $_POST['comment'.$i];
                        $rid = $_POST['hdnID'.$i];
                        echo $i."<br>";
                        echo $row['repair_id'];
                        echo $comment;}
                        $sql1 = "UPDATE  repairdetails   SET comments = '$comment' WHERE repair_id ='$rid'";
                        if (mysqli_query($conn, $sql1)) {
                        
                           echo "Record updated successfully";
                          
                        } else {
                            echo "Error updating record: " . mysqli_error($conn);
                      }
                        
                    }
            }
            ?>
       
         
        
        
    </div>
</div>

    
</body>
</html>