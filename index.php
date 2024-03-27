<?php
require_once("entities/nhanvien.class.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <ul class="menu">
        <h1>DANH SÁCH NHÂN VIÊN</h1>
        <div class="table-container">
            <table>
                <tr>
                    <th>Mã nhân viên</th>
                    <th>Tên nhân viên</th>
                    <th>Phái</th>
                    <th>Nơi sinh</th>
                    <th>Tên Phòng</th>
                    <th>Lương</th>
                </tr>
                <?php
                $nhanviens = NHANVIEN::list_nhanvien();
                foreach ($nhanviens as $item) {
                    echo "<tr>";
                    echo "<td>" . $item["Ma_NV"] . "</td>";
                    echo "<td>" . $item["Ten_NV"] . "</td>";
                    if ($item["Phai"] == "NU") {
                        echo '<td><img src="https://cdn-icons-png.flaticon.com/512/4042/4042422.png" alt="Female Image" class="avatar"></td>';
                    } elseif ($item["Phai"] == "NAM")
                        echo '<td><img src="https://cdn-icons-png.flaticon.com/512/4042/4042356.png" alt="Male Image" class="avatar"></td>';
                    echo "<td>" . $item["Noi_Sinh"] . "</td>";
                    echo "<td>" . $item["Ten_Phong"] . "</td>";
                    echo "<td>" . $item["Luong"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <div class="add-button">
                <a href="AddNV.php" class="button">Add New Employee</a>
            </div>
        </div>
    </ul>
</body>

</html>