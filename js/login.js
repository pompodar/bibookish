function register() {
  $(document.ready).ready(function() {
    if (
      document.getElementById("password").value ==
        document.getElementById("password1").value &&
      document.getElementById("password").value !== "" &&
      document.getElementById("user").value !== ""
    ) {
      $.post(
        "../php/register.php",
        {
          user: document.getElementById("user").value,
          password: document.getElementById("password1").value
        },
        function(data, status) {}
      );
      document.getElementById("login").style.display = "block";
      document.getElementById("register").style.display = "none";
    } else {
      $("#wrongPassword").html("something went wrong");
    }
  });
}

$(document).ready(function() {
  $("#user").keyup(function() {
    var username = $(this)
      .val()
      .trim();

    if (username != "") {
      $.ajax({
        url: "unique.php",
        type: "post",
        data: { username: username },
        success: function(response) {
          $("#uname_response").html(response);
          if (response == "<span style='color: red;'>Not Available.</span>") {
            document.getElementById("submit").style.background = "grey";
            document.getElementById("submit").disabled = true;
          } else {
            document.getElementById("submit").style.background = "red";
            document.getElementById("submit").disabled = false;
          }
        }
      });
    } else {
      $("#uname_response").html("");
    }
  });
});

let user = "<?php echo $just ?>";
let koo = "d";
function logout() {
  $(document.ready).ready(function() {
    $.post("../php/logout.php", {}, function(data, status) {});
  });
  window.location.href = "../index.html";
}
document.getElementById("submit").addEventListener("click", register);
document.getElementById("logout").addEventListener("click", logout);

$(document).ready(function() {
  //toggles active class between tabs by clicking on header links
  $(".header-item").on("click", function(e) {
    e.preventDefault();
    $(this).addClass("activated");
    $(this)
      .siblings()
      .removeClass("activated");

    //changes login to register view and vice versa
    let target_href = $(this).attr("href");
    if (
      target_href === "#register" &&
      $(target_href).css("display") === "none"
    ) {
      $(".dish").addClass("activated");
      setTimeout(function() {
        $(".dish").css("background-image", " url('../img/books.png'");
      }, 300);
    } else if (
      target_href === "#login" &&
      $(target_href).css("display") === "none"
    ) {
      $(".dish").addClass("activated");
      setTimeout(function() {
        $(".dish").css("background-image", " url('../img/books.png'");
      }, 300);
    } else {
    }

    $(".form-holder > .form")
      .not(target_href)
      .hide();
    $(target_href).fadeIn(850);

    setTimeout(function() {
      $(".dish").removeClass("activated");
    }, 600);
  });
});
