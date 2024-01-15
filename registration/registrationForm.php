<?php
include "../connection.php";
include "../bootstrap.php";
?>

<!DOCTYPE html>

<head>

<body>
    <div class="text-center mt-3">
        <h5>Register</h5>
    </div>
    <div class="container mt-3">
        <form action="registerAction.php" method="POST">
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="username" class="form-control" name="username" id="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</head>