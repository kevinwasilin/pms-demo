<div id="page-wrapper">  
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Register</h1>
          <div class="panel panel-default">
              <div class="panel-heading">
                 User Registration Form
              </div>
              <div class="panel-body">
                
                  <div class="col-lg-12">
                  <!-- CONTENT STARTS HERE -->
                  <div class="container-fluid">
                    
                    <div class="col-lg-6">
                      <?php echo form_open('register'); ?>
                    
                        <div class="form-group form-row">
                          <label for="">Email address</label>
                          <input class="form-control" id="" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        </div>
                        <div class="row justify-column-between">
                          <div class="form-group col-lg-6">
                            <label for="">First name</label>
                            <input class="form-control" id="" type="text" placeholder="First name" name="fname">
                          </div>
                          <div class="form-group col-lg-6">
                            <label for="">Last name</label>
                            <input class="form-control" id="" type="text" placeholder="Last name" name="lname">
                          </div>
                        </div>
                        <div class="form-group form-row">
                          <label for="">Password</label>
                          <input class="form-control" id="" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                          <label for="">Password Confirmation</label>
                          <input class="form-control" id="" type="password" placeholder="Re-enter password" name="passconf">
                        </div>
                        <div class="form-group text-right">
                        <input class="btn btn-primary" type="submit" name="submit" value="Register" />
                        </div>
                      </form>
                    </div>
                    <div class="col-lg-6">
                      <?php echo validation_errors(); ?>
                    </div>

                </div>
                  <!-- CONTENT ENDS HERE -->
                </div>
              </div>
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>





