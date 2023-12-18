<body>
    <!-- Your PHP code and HTML structure go here -->

    <div class="wrapper">
        <div class="title-text">
            <div class="title login"> Login Form</div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="<?= base_url('auth/cek_login'); ?>" method="post" class="login">
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address" required>
                        <?= form_error('email', '<span class="error">', '</span>'); ?>
                    </div>

                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                        <?= form_error('password', '<span class="error">', '</span>'); ?>
                    </div>

                    <div class="pass-link"><a href="#">Forgot password?</a></div>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login" class="centered-button">
                    </div>

                    <div class="field">Not a member? <a href="<?= base_url('auth/register'); ?>">Signup now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>