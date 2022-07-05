<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Freedom Level</title>
</head>
<body>
    <form action="../action/freedom_level.action.php" method="post">
        <fieldset>
            <legend>Create Project</legend><br>
            
            <input type="hidden" name="id" id="id">

            <label for="description">Description: </label><br>
            <textarea name="description" id="description" rows="4" cols="50">...</textarea><br><br>

            <input type="checkbox" name="create_stage" value="TRUE">
            <label for="create_stage">Create Stage</label><br><br>

            <input type="checkbox" name="edit_stage" value="TRUE">
            <label for="edit_stage">Edit Stage</label><br><br>

            <input type="checkbox" name="delete_stage" value="TRUE">
            <label for="delete_stage">Delete Stage</label><br><br>
            
            <input type="checkbox" name="create_task" value="TRUE">
            <label for="create_task">Create Task</label><br><br>

            <input type="checkbox" name="edit_task" value="TRUE">
            <label for="edit_task">Edit Task</label><br><br>

            <input type="checkbox" name="delete_task" value="TRUE">
            <label for="delete_task">Delete Task</label><br><br>

            <input type="checkbox" name="add_user" value="TRUE">
            <label for="add_user">Add User</label><br><br>

            <input type="checkbox" name="delete_user" value="TRUE">
            <label for="delete_user">Delete User</label><br><br>

            <input type="checkbox" name="edit_project" value="TRUE">
            <label for="edit_project">Edit Project</label><br><br>

            <input type="checkbox" name="delete_project" value="TRUE">
            <label for="delete_project">Delete Project</label><br><br>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>