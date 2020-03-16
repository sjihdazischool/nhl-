  <main>
    <div class="container">
        <div class="section">
          <div class="row">
            <div class="col s12 center-align">
                <div class="row">
                  <div class="col s12 offset-m2">
                    <?php
                      $sql = "
                        SELECT a.userId, a.userName, a.userImagePath, b.msgId, b.message
                        FROM nhl_stenden_users as a
                        JOIN nhl_stenden_messages as b
                        ON a.userId = b.userId";
                      if($stmt = mysqli_prepare($conn, $sql)){
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $uId, $uName, $image ,$mesId, $message);
                        while (mysqli_stmt_fetch($stmt)) {
                          echo "
                            <div class='col s12 m8'>
                              <div class='card-panel grey lighten-5 z-depth-1'>
                                <div class='row valign-wrapper'>
                                  <div  class='col s8'>
                                    <div class='col s12'>
                                      <img src='".$image."' alt='' id='userImg' class='circle responsive-img'>
                                    </div>
                                    <div class='col s12'>
                                      ".$uName."
                                    </div>
                                  </div>
                                  <div class='col s8'>
                                    <span class='black-text'>
                                      ".$message."
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>";
                        }
                        mysqli_stmt_close($stmt);
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
</main>


