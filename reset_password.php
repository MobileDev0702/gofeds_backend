<!DOCTYPE html>
<html>
    <head>
        <title>Reset Password</title>
    </head>
<body>
    <h1>Reset Password</h1>
    <form method="POST" action="/gofeeds/action_page.php">
        <input type="hidden" id="email" name="email" value="<?php echo $_GET['email'] ?>">

        <label for="oldpwd">Old Password:</label><br>
        <input type="text" id="oldpwd" name="oldpwd"><br><br>

        <label for="newpwd">New Password:</label><br>
        <input type="text" id="newpwd" name="newpwd"><br><br>

        <label for="confirmpwd">Confirm Password:</label><br>
        <input type="text" id="confirmpwd" name="confirmpwd"><br><br>

        <input type="submit" value="Reset">
    </form>
</body>
</html>