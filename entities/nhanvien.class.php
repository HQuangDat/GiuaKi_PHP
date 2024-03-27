<?php
require_once("config/db.class.php");
class NHANVIEN 
{
    public $Ma_NV;
    public $Ten_NV;
    public $Phai;
    public $Noi_Sinh;
    public $Ma_Phong;
    public $Luong;

    public function __construct($Ma_NV, $Ten_NV, $Phai, $Noi_Sinh, $Ma_Phong, $Luong)

    {
        $this->Ma_NV = $Ma_NV;
        $this->Ten_NV =$Ten_NV;
        $this->Phai = $Phai;
        $this->Noi_Sinh =  $Noi_Sinh;
        $this->Ma_Phong = $Ma_Phong;
        $this->Luong = $Luong;
    }
    public function save()
    {
        $db = new Db();
        $sql = "INSERT INTO NHANVIEN(Ma_NV, Ten_NV, Phai, Noi_Sinh, Ma_Phong, Luong) VALUES 
        ('$this->Ma_NV',' $this->Ten_NV','$this->Phai','$this->Noi_Sinh','$this->Ma_Phong','$this->Luong')";
        $result = $db -> query_execute($sql);
        return $result;
    }
    public static function list_nhanvien() {
        $db = new Db();
        $sql = "SELECT nv.*, p.Ten_Phong 
            FROM NHANVIEN nv
            LEFT JOIN PHONGBAN p ON nv.Ma_Phong = p.Ma_Phong";
        $result = $db -> select_to_array($sql);
        return $result;       
    }
}
?>
