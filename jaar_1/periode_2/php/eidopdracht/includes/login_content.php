  <main>
    <center>
      <div class="section"></div>
      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>
      <div class="container">
        <div class="z-depth-1 loginForm grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <form class="col s12" action="login.php" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
              </div>
            </div>
            
            <div class='row'>
              <div class='input-field col s12 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>'>
                <input class='validate blue-text' type='text' name='username' id='username' />
                <label for='email'>Enter your username</label>
                <span class="help-block"><?php echo $username_err; ?></span>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>'>
                <input class='validate blue-text' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
                <span class="help-block"><?php echo $password_err; ?></span>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <div class="col s12">Don't have an account? <a href="signUp.php" class="blue-text text-darken-4">Create one here</a></div>
    </center>
  </main>
