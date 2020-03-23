<?php require_once "../includes/adminHeader.php" ?>
<script src="../js/Rest-API/admin-mockTest.js"></script>
<main class="adminmain admin-mock-tests">
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s6 m5 l4"><a class="active" href="#MockTest">Mock Tests</a></li>
          <li class="tab col s6 m5 l4"><a href="#MockTestQuestions">Mock Test Questions</a></li>
        </ul>
      </div>
      <div id="MockTest" class="col s12">
        <div class="row">
          <div class="input-field col s12 m12 l4">
            <input id="first_name" type="text" class="validate search-box">
            <label for="first_name" class="serach-label">Search Mock Test...</label>
          </div>
          <div class="input-field col s12 m12 l3">
            <select class="browser-default" id="tutorSelect">
            </select>
          </div>
          <div class="input-field col s12 m12 l3">
            <select class="browser-default" id="subjectsSelect">
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
        <div class="row">
          <div class="direction-top">
            <a title="Add Mock Test" href="#" class="btn-floating btn-large green floatright">
              <i class="large material-icons">add</i>
            </a>
          </div>
        </div>
      </div>
      <div id="MockTestQuestions" class="col s12">
        <div class="row">
          <div class="input-field col s12 m12 l4">
            <input id="first_name" type="text" class="validate search-box">
            <label for="first_name" class="serach-label">Search Mock Test Questions...</label>
          </div>
          <div class="input-field col s12 m12 l3">
            <select class="browser-default" id="tutorSelect1">
            </select>
          </div>
          <div class="input-field col s12 m12 l3">
            <select class="browser-default" id="subjectsSelect1">
            </select>
          </div>
          <div class="input-field col s12 m12 l2">
            <button class="btn waves-effect waves-light" type="submit" name="action">Search
              <i class="material-icons right">search</i>
            </button>
          </div>
        </div>
        <a title="Add Mock Test Question" href="#" class="btn-floating btn-large green floatright floating-btn">
          <i class="large material-icons">add</i>
        </a>
        <div class="row" id="mockTestsList">

        </div>
      </div>
    </div>

  </div>

  <!-- Modal Structure -->
  <div id="optionAddUpdate" class="modal">
    <form>
      <div class="modal-content">
        <h4>Add an option</h4>
        <p>How to create a variable in PHP?</p>
        <div class="row">
          <div class="input-field col s12">
            <input id="optionValue" type="text" class="validate">
            <label for="optionValue" class="serach-label">Enter Option value</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Add Option</a>
      </div>
    </form>
  </div>
</main>
<?php require_once "../includes/adminFooter.php" ?>