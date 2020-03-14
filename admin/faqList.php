<?php require_once "../includes/adminHeader.php" ?>
<main class="adminmain admin-mock-tests">
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">
      <div class="col s10 m6 l12">
        <h5 class="breadcrumbs-title">FAQs</h5>
      </div>
      <div class="row">
        <form>
          <div class="input-field col s12 m12 l4">
            <input id="first_name" type="text" class="validate search-box">
            <label for="first_name" class="serach-label">Search users...</label>
          </div>

          <div class="input-field col s12 m12 l2">
            <button class="btn waves-effect waves-light" type="submit" name="action">Search
              <i class="material-icons right">search</i>
            </button>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card">
            <div class="card-content">
              <div class="direction-top">
                <a title="Add Leaning Material" href="faqAdd.php" class="btn-floating btn-large green floatright">
                  <i class="large material-icons">add</i>
                </a>
              </div>
            <div>
              <div class="section" >
                
                  <h5>Question 1</h5>
                  <p>Answer 1</p>
                  
              </div>
              <div class="divider"></div>
              <div class="section">
                <h5>Question 2</h5>
                <p>Answer 2</p>
              </div>
              <div class="divider"></div>
              <div class="section">
                <h5>Question 3</h5>
                <p>Answer 3</p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require_once "../includes/adminFooter.php" ?>