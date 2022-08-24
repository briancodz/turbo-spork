
<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/register.php';
?>

<?php view('header', ['title' => 'Register']) ?>

<div class="box">
<div class="form-signup">
<form action="register.php" method="post">
    <h1>Sign Up</h1>
    </div>

    <div class="form-group">
        <label for="username" class="form-text">Username:</label>
        <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>"
               class="<?= error_class($errors, 'username') ?> form-control">
        <small><?= $errors['username'] ?? '' ?></small>
    </div>

    <div class="form-group">
        <label for="email" class="form-text">Email:</label>
        <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>"
               class="<?= error_class($errors, 'email') ?> form-control">
        <small><?= $errors['email'] ?? '' ?></small>
    </div>

    <div class="form-group">
        <label for="password" class="form-text">Password:</label>
        <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>"
               class="<?= error_class($errors, 'password') ?> form-control">
        <small><?= $errors['password'] ?? '' ?></small>
    </div>

    <div class="form-group">
        <label for="password2" class="form-text">Repeat Password:</label>
        <input type="password" name="password2" id="password2" value="<?= $inputs['password2'] ?? '' ?>"
               class="<?= error_class($errors, 'password2') ?> form-control">
        <small><?= $errors['password2'] ?? '' ?></small>
    </div>

    <div class="form-group">
        <label for="agree">
            <input type="checkbox" name="agree" id="agree" value="checked" <?= $inputs['agree'] ?? '' ?> /> I
            agree
            with the
            <a href="#" title="term of services">term of services</a>
        </label>
        <small><?= $errors['agree'] ?? '' ?></small>
    </div>

    <div class="form-group">
    <button type="submit" class="form-control reg">Register</button>
    </div>


    <div class="form-group">
    <footer>Already a member? <a href="login.php">Login here</a></footer>
    </div>

</form>

</div>
<?php view('footer') ?>