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
    <img src="../imgstart/114.png" alt="login image" class="login__img">

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

        

         <br>
        <br>
        
        
        <button type="submit" class="login__button" name="reg_user" >Register</button>

        <p class="login__register">
            Already have an account? <a href="login.php">Sign in</a>
        </p>
    </form>
</div>

    
    
        <script>
        document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.login__form');
    form.addEventListener('submit', function(event) {
        const password1 = form.querySelector('#login-pass').value;
        const password2 = form.querySelector('#confirm-pass').value;
        const regex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

        if (!regex.test(password1)) {
            alert('Password must be at least 8 characters long, start with a capital letter, and contain at least one number.');
            event.preventDefault();
        } else if (password1 !== password2) {
            alert('Passwords do not match.');
            event.preventDefault();
        }
    });
});
</script>
    
<!--=============== MAIN JS ===============-->
<script src="main.js"></script>
</body>
</html>
