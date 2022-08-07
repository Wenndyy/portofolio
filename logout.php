<?php 
session_start();
session_destroy();
?>
<script>
 alert('Logout successful!');
 location='login.php';
</script>