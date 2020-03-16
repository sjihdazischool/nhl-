  <main>
    <center>
      <div class="section"></div>
      <h5 class="indigo-text">Write anything on your mind.</h5>
      <div class="section"></div>
      <div class="container">
        <div class="z-depth-1 loginForm grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <form class="col s12" action="addMessage.php" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <div class="form-group <?php echo (!empty($message_err)) ? 'has-error' : ''; ?>">
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>'>
                <textarea class='validate blue-text materialize-textarea' name='message' id='textarea1' data-length="120"></textarea>
                <label for='textarea1'>Enter your message</label>
                <span class="help-block"><?php echo $message_err; ?></span>
            </div>
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>send message</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
  </main>
