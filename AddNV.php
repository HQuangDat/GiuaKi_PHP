<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên mới</title>
    <link rel="stylesheet" href="Add.css">
</head>

<body>
    <?php
    require_once("entities/nhanvien.class.php");

    if (isset($_POST["btnsubmit"])) {
        $Ma_NV = $_POST["txtMa_NV"];
        $Ten_NV = $_POST["txtTen_NV"];
        $Phai = $_POST["txtPhai"];
        $Noi_Sinh = $_POST["txtNoi_Sinh"];
        $Ma_Phong = $_POST["txtMa_Phong"];
        $Luong = $_POST["txtLuong"];

        $newEmployee = new NHANVIEN($Ma_NV, $Ten_NV, $Phai, $Noi_Sinh, $Ma_Phong, $Luong);
        $result = $newEmployee->save();

        if (!$result) {
            header("Location: AddNV.php?failure");
        } else {
            header("Location: AddNV.php?inserted");
        }
    }
    ?>
    <h1>Thêm nhân viên mới</h1>

    <?php if (isset($_GET["inserted"])) : ?>
        <h2>Thêm nhân viên thành công</h2>
    <?php endif; ?>

    <form method="post">
        <div class="row">
            <div class="lbltitle">
                <label>Mã nhân viên</label>
            </div>
            <div class="lblinput">
                <input type="text" name="txtMa_NV" value="<?php echo isset($_POST["txtMa_NV"]) ? $_POST["txtMa_NV"] : ""; ?>">
            </div>
        </div>

        <div class="row">
            <div class="lbltitle">
                <label>Tên nhân viên</label>
            </div>
            <div class="lblinput">
                <input type="text" name="txtTen_NV" value="<?php echo isset($_POST["txtTen_NV"]) ? $_POST["txtTen_NV"] : ""; ?>">
            </div>
        </div>

        <div class="row">
            <div class="lbltitle">
                <label>Phái</label>
            </div>
            <div class="lblinput">
                <input type="text" name="txtPhai" value="<?php echo isset($_POST["txtPhai"]) ? $_POST["txtPhai"] : ""; ?>">
            </div>
        </div>

        <div class="row">
            <div class="lbltitle">
                <label>Nơi sinh</label>
            </div>
            <div class="lblinput">
                <input type="text" name="txtNoi_Sinh" value="<?php echo isset($_POST["txtNoi_Sinh"]) ? $_POST["txtNoi_Sinh"] : ""; ?>">
            </div>
        </div>

        <div class="row">
            <div class="lbltitle">
                <label>Mã Phòng</label>
            </div>
            <div class="lblinput">
                <input type="text" name="txtMa_Phong" value="<?php echo isset($_POST["txtMa_Phong"]) ? $_POST["txtMa_Phong"] : ""; ?>">
            </div>
        </div>

        <div class="row">
            <div class="lbltitle">
                <label>Lương</label>
            </div>
            <div class="lblinput">
                <input type="number" name="txtLuong" value="<?php echo isset($_POST["txtLuong"]) ? $_POST["txtLuong"] : ""; ?>">
            </div>
        </div>

        <div class="row">
            <input type="submit" name="btnsubmit" value="Thêm nhân viên">
        </div>
    </form>
</body>

</html>