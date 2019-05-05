<?php
    $conn = mysqli_connect('localhost', 'root', '', 'test') or die(mysqli_error($conn));
    mysqli_set_charset($conn, "utf8");
    $query = mysqli_query($conn,"SELECT * FROM user JOIN resident on(user.username = resident.room_id) WHERE user.id = ".$_REQUEST['id']);
    $row = $query->fetch_assoc();
    $building = $row['building'];
    $room = $row['room_id'];
    $work = $_POST['drpGid'];
    $problem = $_POST['txtcuslog'];
    $tel = $_POST["txtcusphone"];
    $requir = $_POST['rdoisentry'];
    $count = mysqli_query($conn, "SELECT COUNT(*) as count FROM repairdetails") or die(mysqli_error($conn));
    $count2 = $count->fetch_assoc();
    $order = "RE".str_pad(intval($count2['count'])+1, 4, '0', STR_PAD_LEFT);
    
    if($requir == "1"){
        $requir = 'อนุญาติ';
    }
    else{
        $requir = 'อนุญาติ';
    }

    mysqli_query($conn, "INSERT INTO `repairdetails` values ('$order','$work','$problem','$tel','$requir','$room')") or die(mysqli_error($conn));
    mysqli_query($conn, "INSERT INTO `repair` values ('$order','','รอดำเนินการ')") or die(mysqli_error($conn));
    echo "<script>
         alert('Success');
         window.location = '?page=fix';
    </script>";

