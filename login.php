<?php require_once "includes/header.php" ?>
<div class="container">
  <div class="section">
    <div class="row">
    <div class="col s12 m12 l6  offset-l3">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Login</span>
            <div class="row">
              <form class="col s12">
                <div class="row margin-bottom-none">
                  <div class="input-field col s12 m">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Email / Phone</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_password" type="password" class="validate">
                    <label for="icon_password">Password</label>
                  </div>
                  <div class="input-field col s12">
                    <button class="btn waves-effect waves-light orange" type="submit" name="action">Login
                      <i class="material-icons right">send</i>
                    </button>
                  </div>
                  <div class="input-field col s12">
                    <a href="#">Forgot Password?</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
</div>
<?php require_once "includes/footer.php" ?>