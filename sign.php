<?php
include "system/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign-in.css">
    <link rel="shrotcut icon" href="img/Wikipedia-Flags-JP-Japan-Flag.ico">
    <script src="js/script.js" defer></script>
    <title>Sign in</title>
</head>
<body>
    <!--Container-->
    <article class="container">
    <!--Inner block-->
        <div class="block">

            <section class="block__item block-item">
                <img src="img/submit_header_logo.png" alt="logo">
                <h2 class="block-item__title">Don't have an account?</h2>
                <button class="block-item__btn signin-btn">Log in</button>
            </section>
            <section class="block__item block-item">
                <img src="img/submit_header_logo.png" alt="logo">
                <h2 class="block-item__title">Already have an account?</h2>
                <button class="block-item__btn signup-btn">Sign in</button>
            </section>

        </div>

        <!--Sign in form box-->
        <div class="form-box">

            <form action="/api/sign" class="form" method="POST">
                <h3 class="form__title">Sign in account</h3>

                <p>
                    <input type="text" class="form__input" placeholder="Login" name="login">
                </p>
                <p>
                    <input type="password" class="form__input" placeholder="Password" name="password">
                </p>
                <p>
                    <button class="form__btn" name="login_go" type="submit">Sign in</button>
                </p>
                <p>
                </p>
            </form>

        </div>
        <!--Sign up form box-->
        <div class="form-box">

            <form action="/api/sign" method="POST" class="form">
                <h3 class="form__title">Create an account</h3>

                <p>
                    <input type="text" name="login" class="form__input" placeholder="Login">
                </p>
                <p>
                    <input type="email" name="email" class="form__input" placeholder="e-mail">
                </p>
                <p>
                    <input type="address" name="address" class="form__input" placeholder="Address for delivery">
                </p>
                <p>
                    <input type="password" name="password" class="form__input" placeholder="Password">
                </p>
                <p>
                    <input type="password" name="password_a" class="form__input" placeholder="Confirm a password">
                </p>
                <p>
                    <button type="submit" name="reg" class="form__btn form__btn_signup">Sign up</button>
                </p>
            </form>

        </div>

    </article>
</body>
</html>