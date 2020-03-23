$.get( "http://localhost/HUMBER/WAD2/Online-Tutoring-and-Learning/database/Rest-API/admin/admin-mockTest.php?mockTestQuestions", function( mockTestQuestions ) {
  let htmlContent = "";
  for(let mockTestQuestion of mockTestQuestions) {
    console.log(mockTestQuestion)
    htmlContent += "<div class='col s12'><div class='card'><div class='card-content'><span class='card-title'>";
    htmlContent += mockTestQuestion.question;
    htmlContent += "<p class='floatright tiny-text'>";
    htmlContent += mockTestQuestion.marks + " Marks";
    htmlContent += "</p></span><table>";
    let index = 1;
    for(let option of mockTestQuestion.options) {
      htmlContent += "<tr><td>"+(index++)+".</td><td>"+ option.option_value + "</td><td><a href=''>Edit</a></td><td><a href=''>Delete</a></td></tr>";
    }
    htmlContent += "</table></div><div class='card-action'>";
    htmlContent += "<a class='waves-effect waves-light modal-trigger' href='#optionAddUpdate'>Add Option</a>";
    htmlContent += "<a href=''>Edit</a>";
    htmlContent += "<a href=''>Delete</a></div></div></div>";
    $('#mockTestsList').html(htmlContent);
  }
});