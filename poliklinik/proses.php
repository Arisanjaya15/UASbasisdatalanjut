<?php
    require_once "../_config/config.php";
    require "../_assets/libs/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnstatisfiedDependencyException;

    if(isset($_POST['add'])) {
        $total = $_POST['total'];
        for ($i=1; $i<=$total; $i++) { 
            $uuid = Uuid::uuid4()->toString();
            $nama = trim(mysqli_real_escape_string($con, $_POST['nama-'.$i]));
            $ruangan = trim(mysqli_real_escape_string($con, $_POST['ruangan-'.$i]));
            $sql = mysqli_query($con, "INSERT INTO poliklinik(id_poli, nama_poli, ruangan) VALUES ('$uuid', '$nama', '$ruangan')") or die (mysqli_error($con));
        }
        if($sql) {
            echo "<script>alert('".$total." data berhasil di tambahkan'); window.location='data.php';</script>";
         } else {
            echo "<script>alert('Data gagal ditambahkan'); window.location='generate.php';</script>";
         } 
    } else if (isset($_POST['edit'])) {
        for ($i=0; $i<count($_POST['id']); $i++) { 
            $id = $_POST['id'][$i]; 
            $nama = $_POST['nama'][$i]; 
            $ruangan = $_POST['ruangan'][$i];
            mysqli_query($con, "UPDATE poliklinik SET nama_poli = '$nama', ruangan = '$ruangan' WHERE id_poli = '$id'") or die (mysqli_error($con));
        }
        echo "<script>alert('".$total." Data berhasil di update'); window.location='data.php';</script>";
    }
?>