<?php include('./controllers/user_activation.php');?>
<?php include('./controllers/password_change.php');?>

<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Change Password - WorldView360</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Change Password - WorldView360</h3>

                    <?php echo $email_already_verified; ?>
                    <?php echo $email_verified; ?>
                    <?php echo $activation_error; ?>
                    <?php echo $email__notfound; ?>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email"/>

                        <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>New password</label>
                        <input type="password" class="form-control" name="password" id="password"/>

                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                    </div>
                    <div class="form-group">
                        <label>Retype new password</label>
                        <input type="password" class="form-control" name="password2" id="password"/>

                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                    </div>

                    <button type="submit" name="change" id="submit" class="btn btn-outline-primary btn-lg btn-block">Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>