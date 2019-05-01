<?php

  // ! เวลาเปลี่ยนหน้าให้ใช้ url เป็น ?page=`หน้าที่จะไป`

  if (isset($_SESSION['id']) && isset($_SESSION['role'])) {  
    // condition user login.
    if ($_SESSION['role'] == 'resident') { // condtion user has role 'resident'

      if (isset($_GET['page'])) { // check value get in url has exist

        switch ($_GET['page']) { // กำหนดว่าถ้า ?page=`ค่า` แล้วจะให้ import ไฟล์ใหนมา
          case 'home':
            require_once('views/resident.php');
            break;
          
          case 'fix':
            require_once('views/fix.php');
            break;
          
          case 'money':
            require_once('views/money.php');
            break;

          case 'profile':
            require_once('views/profile.php');
            break;
          
          case 'logout':
            require_once('views/logout.php');
            break;
          
          case 'ค่าจาก ?page=':
            # code...
            break;
        }

      } else { // if not --> import resident page
        require_once('views/resident.php');
      }

    } else if ($_SESSION['role'] == 'repairman') {

      if (isset($_GET['page'])) { // check value get in url has exist

        switch ($_GET['page']) { // กำหนดว่าถ้า ?page=`ค่า` แล้วจะให้ import ไฟล์ใหนมา
          case 'home':
            require_once('views/repairman.php');
            break;
          
          case 'fixman':
            require_once('views/fixman.php');
            break;

          case 'logout':
            require_once('views/logout.php');
            break;
          
          case 'ค่าจาก ?page=':
            # code...
            break;
        }

      } else { // if not --> import resident page
        require_once('views/repairman.php');
      }

    } else if ($_SESSION['role'] == 'admin') {

      if (isset($_GET['page'])) { // check value get in url has exist

        switch ($_GET['page']) { // กำหนดว่าถ้า ?page=`ค่า` แล้วจะให้ import ไฟล์ใหนมา
          case 'home':
            require_once('views/admin.php');
            break;

          case 'logout':
            require_once('views/logout.php');
            break;
          
          case 'ค่าจาก ?page=':
            # code...
            break;
          
        }

      } else { // if not --> import resident page
        require_once('views/admin.php');
      }

    }


  } else { 
    // user is not logged in.
    
    // import login page
    require_once('login.php');
  }
?>
