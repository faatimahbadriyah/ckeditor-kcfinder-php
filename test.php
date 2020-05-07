<?php
// print_r($_POST['content']);
$conn = mysqli_connect("localhost","root","","cbt");
 
if($conn){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}

$sql = "INSERT INTO soal VALUES ('145', '".$_POST['content']."');";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "SELECT id, pertanyaan FROM soal where id = '100'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Content: " . $row["pertanyaan"];
    }
} else {
    echo "0 results";
}