<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();


$user = NULL; //Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    $_id = $userModel->decodeId($_GET['id']);
    $user = $userModel->findUserById($_id);//Update existing user
}


if (!empty($_POST['submit'])) {

    if (!empty($_id)) {
        $name = $_POST['name'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validate name
        $nameError =
            $userModel->validateName($name);
        if ($nameError) {
            $errors['name'] = $nameError;
        }

        // Validate password
        $passwordError =
            $userModel->validatePassword($password);
        if ($passwordError) {
            $errors['password'] = $passwordError;
        }

        // Nếu không có lỗi, thực hiện hành động tiếp theo (ví dụ: lưu vào cơ sở dữ liệu)
        if (empty($errors)) {
            // Xử lý tiếp (lưu thông tin vào cơ sở dữ liệu, etc.)

            $userModel->updateUser($_POST);
            header('location: list_users.php');
        }
    } else {
        $userModel->insertUser($_POST);
        header('location: list_users.php');
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">

                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name']))
                        echo $user[0]['name'] ?>'>
                    </div>
                <?php if (!empty($errors['name'])): ?>
                    <span style="color:red;"><?php echo $errors['name']; ?></span>
                <?php endif; ?>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <?php if (!empty($errors['password'])): ?>
                    <span style="color:red;"><?php echo $errors['password']; ?></span>
                <?php endif; ?>


                <br>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>


</html>