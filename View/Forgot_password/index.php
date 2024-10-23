<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <form method="post" action="">
        <table>   
            <tr>    
                <th colspan="2">FORGOT PASSWORD</th>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" placeholder="Enter your username" required></td>
            </tr>
            <tr>
                <td><label for="new_pass">Password</label></td>
                <td><input type="password" name="new_pass" id="pass" placeholder="Enter new password" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="checkbox" id="check">Show/Hide</td>
            </tr>
            <tr>
                <td><a href="index.php?controller=login&action=login">Cancel</a></td>
                <td><button type="submit">Submit request</button></td>
            </tr> 
        </table>
    </form>
</body>
<script>
    const pwd = document.getElementById("pass");
    const chk = document.getElementById("check");
    chk.onchange = function (e) {
    pwd.type = chk.checked ? "text" : "password";
    };
</script>
</html>