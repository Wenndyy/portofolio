<?php 
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

//cek data
$sql = "SELECT * FROM users WHERE username='$username' ";
$qry = mysqli_query($koneksi,$sql);
$usr = mysqli_fetch_array($qry);

if( md5($username) == md5($usr['username']) AND md5($password) == md5($usr['password']))
{
    $_SESSION['id']   = $usr['id'];
    $_SESSION['username'] = $usr['username'];
    $_SESSION['login']    = 1;
    $berhasil = "Login successful, Welcome $username";
  
    
} else {
    $pesan = "Login failed, your username or password is wrong!";
}

?>
<script>
 alert('<?php echo $berhasil;?>');
 location='add_project.php';
</script>
<script>
 alert('<?php echo $pesan;?>');
 location='login.php';
</script>