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
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
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
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">Skills</a></li>
            <li><a href="#project">Project</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <section class="home" id="home">
        <div class="photo">
            <img src="assets/photo.jpg" alt="photo me" >
        </div>
        <div class="content">
            <h3>Hello 👋, Im </h3>
            <ul class="dynamic-text">
                <li><span>Wendy Noer Isnaeni</span></li>
                <li><span>a student</span></li>
                <li><span>a Web developer</span></li>
            </ul>
            <div class="btn">
                <a href="assets/cv_wendy.pdf" target="__blank"> <button class="cv">Download CV</button></a>
                
                <a href="#contact">
                <button class="me">Contact Me</button>
                </a>
                
            </div>    
        </div>
    </section>
    <Section class="about" id="about">  
        <h2>About</h2>
        <div class="deskripsi">
            <div class="img-deskripsi">
                <img src="assets/me.jpg" alt="me">
            </div>
            <div class="my-deskripsi">
                <p>Hi! Introduce My name is Wendy Noer Isnaeni can be called Wendy. I graduated from SMK Telkom Purwokerto and will continue my studies at Telkom University. I have an interest in the IT world, especially in the field of Web Developer.</p>
            </div>
        </div>
        <h2 class="edu">Education</h2>
        <div class="education">
            <div class="kiri">
                <div class="sd">
                    <h4>SD Negeri 2 Klapagading</h4>
                    <p>2011-2016</p>
                </div>
                <div class="smk">
                    <h4>SMK Telkom Purwokerto</h4>
                    <p>2019-2022</p>
                </div>
            </div>
            <div class="bentuk">
                <div class="garis"></div>
                <div class="lingkaran1"></div>
                <div class="lingkaran2"></div>
                <div class="lingkaran3"></div>
                <div class="lingkaran4"></div>
            </div>
            <div class="kanan">
                
                <div class="smp">
                    <h4>SMP Negeri 2 Wangon</h4>
                    <p>2016-2019</p>
                </div>
               
                <div class="kuliah">
                    <h4>Universitas Telkom</h4>
                    <p>2022-2026</p>
                </div>
            </div>
            
        </div>
        <div class="sertifikat">
            <h2>Certificate</h2>
            <div class="img-sertifikat">
            <?php
                $sql = "select * FROM sertifikat LIMIT 4;";
                $tampil = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($tampil)){
               
            ?>
                <div class="card">
                    <img src="assets/<?= $data['gambar']?>" alt="project">
                    <div class="container">
                      <h4><b><?= $data['nama_sertifikat']?></b></h4>
                     
                    </div>
                    <div class="btn-card">
                        <a href="assets/<?= $data['gambar']?>">
                            <button>See</button>
                        </a>  
                    </div>
                </div>
                <?php
                }
            ?>
                <div class="btn-more-sertifikat">
                <button class="see" onclick="document.location='sertifikat.php'"> See More Sertifikat  <i class="fa fa-long-arrow-right" ></i></button>
                </div>
            </div>
           
        </div>
    </Section>
    <section class="skill" id="skill">
        <h2>Skills</h2>
        <div class="kemampuan">
            <img src="assets/html-5.png" alt="html">
            <img src="assets/css-3.png" alt="css">
            <img src="assets/js.png" alt="js">
            <img src="assets/figma.png" alt="figma">
            <img src="assets/bootstrap.png" alt="bootstrap">
            <img src="assets/php.png" alt="php">
            <img src="assets/xampp.png" alt="xampp">
            
        </div>
    </section>
    <section class="project" id="project">
        <h2>Project</h2>
        <div class="daftar">
            <?php
                $sql = "select * FROM project LIMIT 4;";
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
        <div class="more">
            <h2>Interested working with me?</h2>
            <div class="btn-more">
                <button class="see" onclick="document.location='project.php'"> See More Project  <i class="fa fa-long-arrow-right" ></i></button>
                <a href="mailto:dywenbusiness@gmail.com">
                <button class="email-me"><i class="fa fa-envelope"></i> Email Me</button>
                </a>
                
            </div>
        </div>
    </section>
   <section class="footer" id="contact">
    <div class="foot">
        <div class="thanks">
            <h2>Wendy's Portfolio</h2>
            <p>Thank you for visiting my personal portfolio website. Connect with me over socials.</p>
        </div>
        <div class="info">
            <h2>Contact Info</h2>
            <i class="fa fa-instagram"> <p> +62-812-2849-1979</p></i>
            <i class="fa fa-envelope-o"><p> dywenbusiness@gmail.com</p></i>
            <i class="fa fa-map" >
                <p> Purwokerto, Jawa Tengah. Indonesia</p>
            </i>
            
            <div class="sosmed">
                <a href="https://github.com/Wenndyy" target="__blank"><i class="fa fa-github"></i></a>
                <a href="mailto:dywenbusiness@gmail.com" target="__blank"><i class="fa fa-envelope"></i></a>
                <a href="https://instagram.com/dy.wen__" target="__blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/dyywen/" target="__blank"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <div class="copy">
        <h4>Made With ❤ By Wendy's</h4>
    </div>
   </section>
   
</body>
</html>