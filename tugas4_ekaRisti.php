<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Program Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style_ekaRisti.css">
</head>
<body>
<?php
    //Mengambil data dari inputan
    $bil1=@$_POST['bil1'];
    $bil2=@$_POST['bil2'];
    $hasil=@$_POST['hasil'];

    //Membuat variabel yang memanggil fungsi
    if(isset($_POST['penjumlahan'])){
        $hasil=PENJUMLAHAN($bil1,$bil2);
    }
    if(isset($_POST['pengurangan'])){
        $hasil=pengurangan($bil1,$bil2);
    }
    if(isset($_POST['perkalian'])){
        $hasil=perkalian($bil1,$bil2);
    }
    if(isset($_POST['pembagian'])){
        $hasil=pembagian($bil1,$bil2);
    }
    if(isset($_POST['sisaBagi'])){
        $hasil=sisaBagi($bil1,$bil2);
    }
    if(isset($_POST['perpangkatan'])){
        $hasil=perpangkatan($bil1,$bil2);
    }

// fungsi untuk menghitung penjumlahan dan mengembalikan nilai
function PENJUMLAHAN($bil1,$bil2){
    return $bil1+$bil2;
}

// fungsi untuk menghitung pengurangan dan mengembalikan nilai
function pengurangan($bil1,$bil2){
    return $bil1-$bil2;
}

// fungsi untuk menghitung perkalian dan mengembalikan nilai
function perkalian($bil1,$bil2){
    return $bil1*$bil2;
}

// fungsi untuk menghitung pembagian dan mengembalikan nilai
function pembagian($bil1, $bil2){
    return $bil1/$bil2;
}

// fungsi untuk menghitung sisa bagi dan mengembalikan nilai
function sisaBagi($bil1,$bil2){
    return $bil1%$bil2;
}

// fungsi untuk menghitung perpangkatan dan mengembalikan nilai
function perpangkatan($bil1,$bil2){
    return $bil1**$bil2;
}?>

<main>
    <form action="" method="POST">
        <!--Judul Program Sederhana-->
        <h1>KALKULATOR SEDERHANA</h1>
        <!--Untuk menginput bilangan ke-1-->
        <input type="text" name="bil1" id="bil1" >
        <br><br>
        <!--Untuk menginput bilangan ke-2-->
        <input type="text" name="bil2" id="bil2">
        <!--Membuat button penjumlahan, pengurangan, perkalian, pembagian, sisa bagi dan perpangkatan-->
        <input type="submit" id="penjumlahan" name="penjumlahan" value="+">
        <input type="submit" id="pengurangan" name="pengurangan" value="-">
        <input type="submit" id="perkalian" name="perkalian" value="x">
        <br><br>
        <input type="submit" id="pembagian" name="pembagian" value="/">
        <input type="submit" id="sisaBagi" name="sisaBagi" value="%">
        <input type="submit" id="perpangkatan" name="perpangkatan" value="^">
        <br><br>
        <!--Output yang dihasilkan-->
        <input type="text" id="output" value="<?php echo $hasil; ?>">
        <h5>By. ekarnh</h5>
    </form>
</main>
</body>
</html>


   


    