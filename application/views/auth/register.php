
<div class="wrapper">
      <div class="title-text">
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="form-inner">
          <form action="<?= base_url('auth/cek_regis'); ?>" method="post" class="signup">
            <div class="field">
              <input type="text" name="fullname" placeholder="Fullname" required>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Email Address" required >
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required >
            </div>
            <div class="field">
              <input type="password" name="confirmpassword" placeholder="Confirm password" required >
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup">
            </div>
            <div class="signup-link">Already have an account? <a href="<?= base_url('auth'); ?>">Login now</a></div>
        </div>
      </div>
    </div>
