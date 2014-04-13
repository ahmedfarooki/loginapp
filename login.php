<?php
    function checkUserCred($user, $pass) {
        if ($user === "ammaar" && $pass === "admin") {
            return 1;
        }
        else {
            return 0;
        }
    }

    print_r($_POST);

    $userPermissions = 0;
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $userPermissions = checkUserCred($_POST['login'], $_POST['password']);
    }

    if ($userPermissions) {
?>
    Hello Ammaaar!

<?php
    }
    else {
?>

<h2>Login form</h2>
<form action="login.php" method="post">
<table border="1">
<tr>
  <td>Login</td>
  <td><input type="text" name="login" /></td>
</tr>
<tr>
  <td>Password</td>
  <td><input type="password" name="password" /></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit" name="login" value="Login" /></td>
</tr>
</table>
</form>

<?php
    }
?>

This is the footer.
