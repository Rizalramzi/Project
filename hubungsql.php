<?php
$host =new mysqli("localhost","root","","persewaan");
if(!$host){
    die(mysqli_error($host));
}else{
    echo"connected";
}
$sql="select * from `pegawai`";
$result= mysqli_query($host,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id_pegawai'];
        $nama=$row['nama'];
        $alamat=$row['alamat'];
        echo $id,$nama,$alamat.'<br>';
    }
}