<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điểm sinh viên</title>
    <link rel="stylesheet" href="DiemSV.css">
</head>

<body>
    <div id="wrapper" class="wrapper-content">
        <div class="body">
            <div class="title">
                <h3>Nhập điểm cho sinh viên:</h3>
            </div>
            <div class="content">
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Mã sinh viên:</label>
                        <input type="text" name="masv" id="masv">
                    </div>
                    <div class="form-group">
                        <label>Họ tên:</label>
                        <input type="text" name="tensv" id="tensv">
                    </div>
                    <div class="form-group">
                        <label>Giới tính:</label>
                        <input type="radio" name="gioitinh" id="gioitinh_nam" value="1">Nam
                        <input type="radio" name="gioitinh" id="gioitinh_nu" value="0">Nữ
                    </div>
                    <div class="form-group">
                        <label>Chọn kỳ học:</label><br>
                        <select class="hocki" name="hocki" id="hocki">
                            <option value="1">Học kỳ 1</option>
                            <option value="2">Học kỳ 2</option>
                            <option value="3">Học kỳ 3</option>
                            <option value="3">Học kỳ 4</option>
                            <option value="3">Học kỳ 5</option>
                            <option value="3">Học kỳ 6</option>
                            <option value="3">Học kỳ 7</option>
                            <option value="3">Học kỳ 8</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chọn môn học:</label><br>
                        <select class="monhoc" name="monhoc" id="monhoc">
                            <option value="1">Tiếng anh nâng cao</option>
                            <option value="2">Lập trình cơ bản</option>
                            <option value="3">Hệ quản trị cơ sở dữ liệu</option>
                            <option value="4">Lập trình hướng đối tượng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Điểm quá trình: <label>
                                <input type="text" name="diem_qt" id="diem_qt">
                    </div>
                    <div class="form-group">
                        <label>Điểm thi: <label>
                                <input type="text" name="diem_thi" id="diem_thi">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="Lưu">
                    </div>
                </form>
                <?php
                require 'xulydiem.php';
                ?>
            </div>
        </div>
    </div>
</body>

</html>