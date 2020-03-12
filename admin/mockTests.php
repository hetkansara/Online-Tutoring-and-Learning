<?php require_once "../includes/adminHeader.php" ?>
<main class="adminmain admin-mock-tests">
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">
      <div class="input-field col s12 m12 l4">
        <input id="first_name" type="text" class="validate search-box">
        <label for="first_name" class="serach-label">Search Mock Test...</label>
      </div>
      <div class="input-field col s12 m12 l3">
        <select class="browser-default">
          <option value="" disabled selected>Select Tutor</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
      </div>
      <div class="input-field col s12 m12 l3">
        <select class="browser-default">
          <option value="" disabled selected>Select Subject</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
      </div>
      <div class="input-field col s12 m12 l2">
        <button class="btn waves-effect waves-light" type="submit" name="action">Search
          <i class="material-icons right">search</i>
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Mock Test 1</span>
            <p>Subject: <strong>Web Application Development</strong></p>
            <p class="small-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum....</p>
          </div>
          <div class="card-action">
            <a href="#" class="small-text">View Test</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Mock Test 2</span>
            <p>Subject: <strong>Web Application Development</strong></p>
            <p class="small-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum....</p>
          </div>
          <div class="card-action">
            <a href="#" class="small-text">View Test</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Mock Test 3</span>
            <p>Subject: <strong>Web Application Development</strong></p>
            <p class="small-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum....</p>
          </div>
          <div class="card-action">
            <a href="#" class="small-text">View Test</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Mock Test 3</span>
            <p>Subject: <strong>Web Application Development</strong></p>
            <p class="small-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum....</p>
          </div>
          <div class="card-action">
            <a href="#" class="small-text">View Test</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php require_once "../includes/adminFooter.php" ?>