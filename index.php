<!DOCTYPE html>
<html>

<head>
    <title>How to Upload Image using ckeditor in PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- <script src="./ckeditor/full_ckeditor/ckeditor.js" ></script> -->
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
</head>

<body>
    <?php 
    $conn = mysqli_connect("localhost","root","","cbt");
    if($conn){
        echo "koneksi host berhasil.<br/>";
    }else{
        echo "koneksi gagal.<br/>";
    }
    

    $sql = "SELECT id, pertanyaan FROM soal where id = '100'";
    $result = mysqli_query($conn, $sql);
    $a = '';

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $a = $row["pertanyaan"];
        }
    } else {
        $a = "0 results";
    }
    ?>
    <div class="container">
        <br />
        <h3 align="center">How to Upload Image using ckeditor in PHP</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">How to Upload Image using ckeditor in PHP</h3>
            </div>
            <form action="test.php" method="POST">
                <div class="panel-body">
                    <textarea name="content" id="content" class="form-control ckeditor"></textarea>
                </div>
                <input type="submit" value="send">

            </form>
        </div>
    </div>
</body>

</html>

<script>
    CKEDITOR.replace('content',{
        filebrowserBrowseUrl:'./kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl:'./kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl:'./kcfinder/browse.php?type=flash',
        filebrowserUploadUrl:'./kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl:'./kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl:'./kcfinder/upload.php?type=flash',
    });
</script>