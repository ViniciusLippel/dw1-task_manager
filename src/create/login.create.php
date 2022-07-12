<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Login</title>
</head>
<body>
    <form action="../action/login.action.php" method="post">
        <fieldset>
            <legend>Create Login</legend><br>
            
            <input type="hidden" name="id" id="id">
            
            <label for="user_id">User_id: </label><br>
            <input type="text" name="user_id" id="user_id"><br><br>

            <label for="password">Password: </label><br>
            <input type="password" name="password" id="password"><br><br>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>