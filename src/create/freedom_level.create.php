<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Freedom Level</title>
</head>
<body>
    <form action="project.action.php" method="post">
        <fieldset>
            <legend>Create Project</legend><br>
            
            <input type="hidden" name="id" id="id">

            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name"><br><br>

            <label for="description">Description: </label><br>
            <textarea name="description" id="description" rows="4" cols="50">...</textarea><br><br>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>