<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="login.css">

    <title>Register</title>
    <link rel="icon" type="image/png" href="icon1.png"/>
</head>
<body>
<div class="login">
    <img src="register.png" alt="login image" class="login__img">

    <form method="post" action="server.php" class="login__form">
        <h1 class="login__title">Register</h1>

        <div class="login__content">

            <div class="login__box">
                <i class="ri-user-3-line login__icon"></i>

                <div class="login__box-input">
                    <input type="text" required class="login__input" id="login-username" placeholder=" " name="username">
                    <label for="login-username" class="login__label">Username</label>
                </div>
            </div>

            <div class="login__box">
                <i class="ri-user-3-line login__icon"></i>

                <div class="login__box-input">
                    <input type="email" required class="login__input" id="login-email" placeholder=" " name="email">

                    <label for="login-email" class="login__label">Email</label>
                </div>
            </div>

            <div class="login__box">
                <i class="ri-lock-2-line login__icon"></i>

                <div class="login__box-input">
                    <input type="password" required class="login__input" id="login-pass" placeholder=" " name="password_1">
                    <label for="login-pass" class="login__label">Password</label>
                    <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                </div>
            </div>
        </div>

        <div class="login__box">
            <i class="ri-lock-2-line login__icon"></i>

            <div class="login__box-input">
                <input type="password" required class="login__input" id="confirm-pass" placeholder=" " name="password_2">
                <label for="confirm-pass" class="login__label">Confirm Password</label>
                <i class="ri-eye-off-line login__eye" id="login-eye"></i>
            </div>
        </div>

        <!-- حقل رقم الهاتف -->
        <div class="login__box">
            <i class="ri-phone-line login__icon"></i>

            <div class="login__box-input">
                <input type="tel" required pattern="[0-9]{10,13}" class="login__input" id="phone" placeholder=" " name="phone">
                <label for="phone" class="login__label">Phone</label>
            </div>
        </div>

        <div class="login__check">
            <div class="login__check-group">
                <input type="checkbox" class="login__check-input" id="login-check">
                <label for="login-check" class="login__check-label">I have read and agree with the</label>
            </div>

            <a href="#" class="login__forgot">terms of use</a>

        </div>


        
        
        <button type="submit" class="login__button" name="reg_owner">Register</button>

        <p class="login__register">
            Already have an account? <a href="login.html">Sign in</a>
        </p>
    </form>
</div>

<!--=============== MAIN JS ===============-->
<script src="main.js"></script>
</body>
</html>
