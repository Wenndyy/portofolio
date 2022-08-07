<!DOCTYPE html>
<html>
<head>
 <title>Portofolio | Login</title>
 <style>
    body 
    { 
        font-family: verdana; 
        font-size: 12px; 
    }
    a 
    { 
        text-decoration: none; 
        color: blue; 
    }
    a:hover 
    { 
        color: green; 
    }
 </style>
</head>
<body>
    <h1 align="center">Login</h1>
    <hr>
    <form action="login-proses.php" method="post">
        <table width="300" border="0" align="center">
        <tr>
            <td width="150">Username</td>
            <td>
            <input type="text" name="username" required>
            </td>
        </tr>
        <tr>
            <td width="150">Password</td>
            <td>
            <input type="password" name="password" required>
            </td>
        </tr>
        <tr>
            <td width="150"></td>
            <td>
            <input type="submit" value="login" required>
            </td>
        </tr>
        </table>
    </form>
</body>
</html>