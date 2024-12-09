$(document).ready(function () {
  $("#form").on("submit", function (e) {
    e.preventDefault();
    let selectedOption = $("input[name='fav_language']:checked").val();

    $.ajax({
      url: "post_action.php",
      type: "POST",
      data: { fav_language: selectedOption },
      dataType: "json",
      success: function (response) {
        console.log("AJAX Response: ", response); // Debugging: Inspect the response
        $(".results").html(`
        <p>HTML Votes: ${response.html}</p>
        <p>CSS Votes: ${response.css}</p>
        <p>JavaScript Votes: ${response.javascript}</p>
        `);        
      },
      error: function (xhr, status, error) {
        console.log("error")
      },
    });
  });
});
