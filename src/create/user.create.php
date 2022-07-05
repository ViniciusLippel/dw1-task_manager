<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <form action="../action/user.action.php" method="post">
        <fieldset>
            <legend>Create User</legend><br>
            
            <input type="hidden" name="id" id="id">

            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name"><br><br>

            <label for="email">Email: </label><br>
            <input type="text" name="email" id="email"><br><br>

            <label for="birth_date">Birth Date: </label><br>
            <input type="date" name="birth_date" id="birth_date"><br><br>

            <input type="checkbox" name="lgpd" value="TRUE">
            <label for="accept">Accept Terms and Conditions</label><br><br>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>