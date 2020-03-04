<?php require_once "includes/header.php" ?>
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12 l8  offset-l2">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Register</span>
            <div class="row">
              <form class="col s12">
                <div class="row margin-bottom-none">
                  <div class="input-field col s12 m12 l6">
                    <!-- <i class="material-icons prefix">account_circle</i> -->
                    <input id="firstname" type="text" class="validate">
                    <label for="firstname">Firstname</label>
                  </div>
                  <div class="input-field col s12 m12 l6">
                    <!-- <i class="material-icons prefix">account_circle</i> -->
                    <input id="lastname" type="text" class="validate">
                    <label for="lastname">Lastname</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="confirmPassword" type="password" class="validate">
                    <label for="confirmPassword">Confirm Password</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input id="contact" type="text" class="validate">
                    <label for="contact">Contact</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">date_range</i>
                    <input id="dateOfBirth" type="text" class="validate datepicker">
                    <label for="dateOfBirth">Date of Birth</label>
                  </div>
                  <div class="input-field col s12 m12 l12">
                  <i class="material-icons prefix">wc</i>
                    <select>
                      <option value="" disabled selected>Select Gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                    <label>Gender</label>
                  </div>
                  <!-- <div class="input-field col s12 m12 l6">
                    <select>
                      <option value="" disabled selected>Select Role</option>
                      <option value="1">Student</option>
                      <option value="2">Tutor</option>
                    </select>
                    <label>Role</label>
                  </div> -->
                  <div class="input-field col s12">
                    <button class="btn waves-effect waves-light orange" type="submit" name="action">Register
                      <i class="material-icons right">person</i>
                    </button>
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