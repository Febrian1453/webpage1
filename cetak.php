<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$sex=$_POST['sex'];
$pekerjaan=$_POST['pekerjaan'];
$hobby=$_POST['hobby'];

echo 'Nama : ';
echo $nama;
echo 'Alamat : ';
echo $alamat;
echo 'Jenis Kelamin : ';
echo $sex;
echo 'Pekerjaan : ';
echo $pekerjaan;
echo 'Hobby :';
echo $hobby;

?>

</body>
</html>
