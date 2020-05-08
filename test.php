<?php
// print_r($_POST['content']);
$conn = mysqli_connect("localhost","root","","cbt");
 
if($conn){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}

$sql = "INSERT INTO soal VALUES ('101', '".$_POST['content']."');";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}