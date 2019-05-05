<!DOCTYPE html>
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

            <label for="lblbuild">อาคาร</label><br><br>
            <input type="text" id="txtbuildid" name="txtbuildid" placeholder="เลขที่อาคาร"><br><br>

            <label for="lblbuild">ห้อง</label><br><br>
            <input type="text" id="txtbuildid" name="txtbuildid" placeholder="เลขที่ห้อง"><br><br>

            <label for="lblbuild">เลือกงานซ่อม</label><br><br>
            <select name="drpGid" id="drpGid" onchange="onTypeChange(this);">
                <option value="0" selected="selected">เลือกงานซ่อม</option>
                <optgroup label="อุปกรณ์ไฟฟ้า">
                    <option value="13">ตู้เย็น</option>
                    <option value="44">ทีวี</option>
                    <option value="7">ปลั๊กไฟเต้ารับ</option>
                    <option value="45">พัดลม</option>
                    <option value="6">สวิทซ์เปิด-ปิดไฟระเบียง</option>
                    <option value="4">สวิทซ์เปิด-ปิดไฟห้องนอน</option>
                    <option value="5">สวิทซ์เปิด-ปิดไฟห้องน้ำ</option>
                    <option value="8">สายไฟฟ้า</option>
                    <option value="3">หลอดไฟระเบียง</option>
                    <option value="1">หลอดไฟห้องนอน</option>
                    <option value="2">หลอดไฟห้องน้ำ</option>
                    <option value="12">เครื่องทำความเย็นแอร์</option>
                    <option value="11">เครื่องทำน้ำอุ่น</option>
                    <option value="9">เบรคเกอร์-สะพานไฟ</option>
                    <option value="10">ไฟฉุกเฉิน</option>
                    <option value="14">ไมโครเวป</option>
                </optgroup>
                <optgroup label="อุปกรณ์ประปา">
                    <option value="25">ก๊อกน้ำ</option>
                    <option value="16">ก๊อกน้ำอ่างซักผ้า</option>
                    <option value="15">ก๊อกน้ำอ่างล้างหน้า</option>
                    <option value="21">ท่อน้ำ</option>
                    <option value="47">ปั๊มน้ำ</option>
                    <option value="17">ผักบัวห้องอาบน้ำ</option>
                    <option value="27">ฝาปิดชักโครก</option>
                    <option value="26">ลูกลอยโถชักโครก</option>
                    <option value="28">วาล์วน้ำฝักบัว</option>
                    <option value="19">สายชำระ</option>
                    <option value="18">สายฝักบัวห้องอาบน้ำ</option>
                    <option value="20">หัวฉีดฟ๊อกกี้</option>
                    <option value="22">อ่างล้างหน้า</option>
                    <option value="23">โถปัสสาวะ</option>
                    <option value="24">โถส้วม</option>
                </optgroup>
                <optgroup label="อุปกรณ์ครุภัณฑ์">
                    <option value="29">กระจกห้องน้ำ</option>
                    <option value="36">กลอนประตูห้อง</option>
                    <option value="33">ตู้เสื้อผ้า</option>
                    <option value="37">ที่ล็อคกุญแจห้อง</option>
                    <option value="35">บานพักประตูเสื้อผ้า</option>
                    <option value="34">บานพับประตูห้อง</option>
                    <option value="40">บานเกล็ด</option>
                    <option value="42">ประตูห้อง</option>
                    <option value="43">ประตู้ห้องน้ำ</option>
                    <option value="41">ฝ้าเพดาน</option>
                    <option value="39">พื้นกระเบื้อง</option>
                    <option value="48">มุ้งลวด</option>
                    <option value="30">ลูกบิดห้อง</option>
                    <option value="31">ลูกบิดห้องน้ำ</option>
                    <option value="38">เตียงนอน</option>
                    <option value="32">โต๊ะแต่งตัว</option>
                </optgroup>
                <optgroup label="อื่น ๆ">
                    <option value="50">อื่น ๆ</option>
                </optgroup>
            </select><br><br>

            <label for="lblbuild">อาการ/ปัญหา</label><br><br>
            <textarea name="txtcuslog" id="txtcuslog" placeholder="อาการหรือปัญหา.."></textarea><br><br>

            <label for="lblbuild">เบอร์โทรศัพท์ติดต่อ</label><br><br>
            <input type="text" id="txtcusphone" name="txtcusphone" placeholder="เบอร์โทรศัพท์ติดต่อ.." value=""><br><br>

            <label for="lblentry">กรณีผู้เช่าไม่อยู่ห้อง อนุญาตให้ช่างเข้าซ่อมหรือไม่?</label><br><br>
            <p>
                <input name="rdoisentry" type="radio" value="1">
                อนุญาต
                <input name="rdoisentry" type="radio" value="0" checked="">ไม่อนุญาต

                <br>
                <br>

                <input type="submit" value="ส่งคำแจ้งซ่อม">
            </p>
        </div>
    </div>

</body>

</html>