
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
      <?php echo form_open('register'); ?>
          <div class="form-group">
            <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="">First name</label>
                <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="fname" value="<?php echo set_value('fname'); ?>">
              </div>
              <div class="col-md-6">
                <label for="">Last name</label>
                <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="lname" value="<?php echo set_value('lname'); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Email address</label>
            <input class="form-control" id="" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="">Password</label>
                <input class="form-control" id="" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
              </div>
              <div class="col-md-6">
                <label for="">Confirm password</label>
                <input class="form-control" id="" type="password" placeholder="Confirm password" name="passconf" value="<?php echo set_value('password'); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Register" />
        </div>
        </form>
        <?php echo validation_errors(); ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url().'login'; ?>">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
