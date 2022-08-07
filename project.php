<?php 
    session_start();
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Project</title>
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
    <section class="all-project" id="all-project">
        <div class="list-project">
            <?php
                $sql = "select * FROM project";
                $tampil = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($tampil)){
               
            ?>
            <div class="card">
                <img src="assets/<?= $data['gambar']?>" alt="project">
                <div class="container">
                    <h4><b><?= $data['name']?></b></h4>
                    <p><?= $data['deskripsi']?></p>
                </div>
                <div class="btn-card">
                    <a href="<?= $data['link_demo']?>" class="btn-demo" target="__blank">
                    <button>Demo</button>
                    </a>
                    <a href="<?= $data['link_repo']?>" class="btn-repo" target="__blank">
                    <button>Github</button>
                    </a>
                    
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        
    </section>
</body>
</html>