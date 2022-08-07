<?php
    session_start();
    $login = $_SESSION['login'];
    if($login == 1)
    {
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Add Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="material-icons" id="btn">subject</i>
            <i class="material-icons" id="close">close</i>
        </label>
        <h2>Wendy.</h2>
        <ul class="menu">
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#skill">Skills</a></li>
            <li><a href="index.php#project">Project</a></li>
            <li><a href="index.php#contact">Contact</a></li>
        </ul>
    </nav>

<div class="add">
    
    <div class="logout">
        <div class="add_sertifikat">
            <a href="add_sertifikat.php"> 
                <button>Add Sertfikat</button>
            </a>
        </div>
        <a href="logout.php"> 
            <button>Logout</button>
        </a>
    </div>
    <h2>Add Project</h2>
    <form method="post" enctype="multipart/form-data">
        <label for="name">Name project</label>
        <input type="text" id="name" name="name" placeholder="Your name project..">
        <label for="gambar">Picture</label>
        <br>
        <input type="file" name="gambar" required /> <br><br>
        <label for="deskripsi">Description</label>
        <input type="text" id="deskripsi" name="deskripsi" placeholder="Your deskripsi project..">
        <label for="link_demo">Link Demo</label>
        <input type="text" id="link_demo" name="link_demo" placeholder="Your Link demo..">
        <label for="link_repo">Link Repo</label>
        <input type="text" id="link_repo" name="link_repo" placeholder="Your Link repo..">
    
        <input type="submit" value="simpan" name="simpan">
    </form>
</div>  
<?php

 if (isset($_POST['simpan'])) {
  //buat folder bernama gambar
  $tempdir = "assets/"; 
        if (!file_exists($tempdir))
        mkdir($tempdir,0755); 
        //gambar akan di simpan di folder gambar
        $target_path = $tempdir . basename($_FILES['gambar']['name']);

        //nama gambar
        $nama_gambar=$_FILES['gambar']['name'];
        //ukuran gambar
        $ukuran_gambar = $_FILES['gambar']['size']; 

        $fileinfo = @getimagesize($_FILES["gambar"]["tmp_name"]);
        //lebar gambar
        $width = $fileinfo[0];
        //tinggi gambar
        $height = $fileinfo[1]; 
        if($ukuran_gambar > 1000000){ 
            echo 'Image size exceeds requirements';
        }else{
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_path)) {
                
                $sql= "INSERT INTO project(name,gambar,deskripsi,link_demo,link_repo) VALUES('".$_POST['name']."', '".$nama_gambar."','".$_POST['deskripsi']."','".$_POST['link_demo']."','".$_POST['link_repo']."')";
                $upload = mysqli_query($koneksi, $sql);
                $pesan =  'Save data successfully';
            } else {
                $pesan = 'Save data failed';
            }
        } 
 }
?>
</body>
    <script>
    alert('<?php echo $pesan;?>');
    location='add_project.php';
    </script>
</html>

<?php
    }
    else {
        echo '<script> alert("You are not logged in yet!");  ';
        echo "location='login.php';";
        echo '</script>';
        
       
   
    } 
?>