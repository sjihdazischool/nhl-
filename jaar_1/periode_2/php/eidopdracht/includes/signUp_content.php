  <main>
    <center>
      <div class="section"></div>

      <h5 class="indigo-text">Create your account here</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 signUpform grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" action="signUp.php" method="post" enctype="multipart/form-data">
            <div id="avatar">
              <div class="avatar-upload">
                  <div class="avatar-edit">
                      <input type="file" name="fileToUpload" id="fileToUpload">
                      <label for="fileToUpload"></label>
                  </div>
                  <div class="avatar-preview">
                      <div id="imagePreview" style="background-image: url(images/dummy-avatar.jpg);">
                      </div>
                  </div>
              </div>
            </div>
            <div class='row'>
              <div class='col s12'>
                <?php
                  if (!empty($username_err)){
                    echo "<p>".$username_err."</p>";
                  } 
                  if (!empty($password_err)) {
                    echo "<p>".$password_err."</p>";
                  } 
                  if (!empty($confirm_password_err)) {
                    echo "<p>".$confirm_password_err."</p>";
                  }
                  if (!empty($image_err)) {
                    echo "<p>".$image_err."</p>";
                  }
                  if (!empty($gen_err)) {
                    echo "<p>".$gen_err."</p>";
                  }
                ?>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='blue-text' type='text' name='username' id='username' />
                <label for='email'>Enter your username</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate blue-text' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate blue-text' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate blue-text' type='password' name='confirm_password' id='confirm_password' />
                <label for='password'>confirm your password</label>
              </div>
            </div>
            <div class='row'>
              <button type='submit' name='btn_login' class='col s6 offset-m3 btn btn-large waves-effect indigo'>sign up</button>
            </div>
          </form>
        </div>
      </div>
      Already have an account? <a href="login.php" class="blue-text text-darken-4">Login here</a>
    </center>
  </main>
