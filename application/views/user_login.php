<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php echo form_open('login'); ?>
          <div class="form-group">
            <label for="">Email address</label>
            <input class="form-control" id="" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" id="" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <div class="form-group">
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Login" />
        </div>
        </form>
        <?php echo validation_errors(); ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url().'register'; ?>">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>