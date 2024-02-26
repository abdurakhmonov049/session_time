<?php
session_start();
?>
<!DOCTYPE>
<html>
<form action="login.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pwd"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SignIn" name="submit"></td>
        </tr>
    </table>
</form>

</html>

<?php
if (isset($_POST['submit'])) {
    $v1 = "diyorbek";
    $v2 = "2004";
    $v3 = $_POST['text'];
    $v4 = $_POST['pwd'];
    if ($v1 == $v3 && $v2 == $v4) {
        $_SESSION['user'] = $v1;
        $_SESSION['start'] = time(); // Taking now logged in time.
        // Ending a session in 30 minutes from the starting time.
        $_SESSION['expire'] = $_SESSION['start'] + (0.1 * 60);
        header('Location:homepage.php');
    } else {
        echo "Please enter the username or password again!";
    }
}
?>