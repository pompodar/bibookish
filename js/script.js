var path = window.location.pathname;
var book = path.split("/").pop();
var book = book.split(".php")[0];
let loader = document.getElementById("loader");
let cancel = document.getElementById("cancel");
let submit = document.getElementById("submit");
let logo = document.getElementById("logo");

console.log(book);
console.log(document.getElementsByClassName("english").length);
console.log(document.getElementsByClassName("ukrainian").length);
console.log(user);

loader.style.display = "block";

setTimeout(() => {
  loader.style.display = "none";
  //cancel.style.display = "block";
  //submit.style.display = "block";
  logo.style.display = "block";
}, 1600);

for (let i = 0; i < document.getElementsByClassName("ukrainian").length; i++) {
  let item = document.createElement("div");
  let item1 = document.createElement("div");
  let but = document.createElement("button");
  item.setAttribute("class", "item");
  item.setAttribute("id", i);
  but.setAttribute("id", "but" + i);
  item1.setAttribute("class", "item1");
  item1.setAttribute("id", "item" + i);
  document.querySelector("#container").appendChild(item);
  document.querySelector("#container").appendChild(item1);
  item.innerHTML = document.querySelectorAll(".ukrainian")[i].innerHTML;
  if (i > document.getElementsByClassName("english").length - 1) {
    item1.innerHTML = "";
  } else {
    item1.innerHTML = document.querySelectorAll(".english")[i].innerHTML;
  }
}

let pageNumber = 1;

let click = 0;

function current() {
  $(document.ready).ready(function() {
    $.post(
      "php/show_current_page.php",
      {
        current_page: book + "_current_page",
        book: book,
        table: user
      },
      function(data, status) {
        console.log("hurray");
        /*
        var data = JSON.parse(data);
        if (data.length == 0) {
          pageNumber = 1;
        } else {
          pageNumber = data[0].page;
        }
        */
        document.getElementsByClassName("item")[pageNumber - 1].style.display =
          "block";
        document.getElementsByClassName("item1")[pageNumber - 1].style.display =
          "block";
        let ukrName;
        if (book == "wilde_the_devoted_friend") {
          ukrName = "   ОСКАР УАЙЛЬД ВІРНИЙ ДРУГ";
        } else if (book == "ray_bradbury_the_sound_of_thunder") {
          ukrName = "  РЕЙ БРЕДБЕРІ І ВДАРИВ ГРІМ";
        } else {
          ukrName = "   ДЖЕК ЛОНДОН БОГ ЙОГО БАТЬКІВ";
        }
        document.getElementById("name").innerHTML =
          book.replace(/\_/g, " ").toUpperCase() + ukrName;
        document.getElementById("pageNumber").innerHTML =
          pageNumber + "/" + document.getElementsByClassName("item").length;

        document.onkeydown = checkKey;

        function checkKey(e) {
          e = e || window.event;

          if (e.keyCode == "38") {
            // up arrow
          } else if (e.keyCode == "40") {
            // down arrow
          } else if (e.keyCode == "37") {
            console.log(pageNumber);
            if (pageNumber > 0) {
              if (pageNumber == 0) {
                document.getElementById("name").innerHTML =
                  'Ray Bradbury The Sound of Thunder Рей БРЕДБЕРІ І ВДАРИВ ГРІМ"';
              }
              pageNumber--;
              document.getElementsByClassName("item")[
                pageNumber + 1
              ].style.display = "none";
              document.getElementsByClassName("item1")[
                pageNumber + 1
              ].style.display = "none";

              document.getElementsByClassName("item")[
                pageNumber
              ].style.display = "block";
              document.getElementsByClassName("item1")[
                pageNumber
              ].style.display = "block";

              document.getElementById("pageNumber").innerHTML =
                pageNumber +
                1 +
                "/" +
                document.getElementsByClassName("item").length;
              /*
                                                                                $(document.ready).ready(function () {
                                                                                        $.post("php/current_page.php", {
                                                                                                page: pageNumber + 1,
                                                                                                curent_page: book + "_current_page"
                                                                                        }, function (data, status) {
                        
                        
                        
                                                                                        })
                                                                                });
                        */
            }
          } else if (e.keyCode == "39") {
            console.log(pageNumber);
            if (
              pageNumber <
              document.getElementsByClassName("item").length - 1
            ) {
              document.getElementById("name").innerHTML = "";
              if (pageNumber == 0) {
                console.log(0000);
              } else {
                document.getElementsByClassName("item")[
                  pageNumber - 1
                ].style.display = "none";
                document.getElementsByClassName("item1")[
                  pageNumber - 1
                ].style.display = "none";
              }
              document.getElementsByClassName("item")[
                pageNumber
              ].style.display = "none";
              document.getElementsByClassName("item1")[
                pageNumber
              ].style.display = "none";
              if (click == 0) {
              } else {
                pageNumber++;
              }
              click++;
              document.getElementsByClassName("item")[
                pageNumber
              ].style.display = "block";
              document.getElementsByClassName("item1")[
                pageNumber
              ].style.display = "block";
              document.getElementById("pageNumber").innerHTML =
                Number(pageNumber) +
                1 +
                "/" +
                document.getElementsByClassName("item").length;
              /*
                                                                        $(document.ready).ready(function () {
                                                                                $.post("php/current_page.php", {
                                                                                        page: pageNumber + 1,
                                                                                        current_page: book + "_current_page"
                        
                                                                                }, function (data, status) {
                        
                        
                        
                                                                                })
                                                                        });
                        */
            }
          }
        }
      }
    );
  });
}

setTimeout(current, 5);

let word = document.getElementsByTagName("span");
for (let i = 0; i < word.length; i++) {
  word[i].onclick = info;
  word[i].id = i;
}
let words = document.getElementById("word");
let transl = document.getElementById("transl");

function info() {
  let word1 = this.innerHTML;
  let word = word1.replace(/\./g, "");
  word = word.replace(/\ /g, "");
  word = word.replace(/\,/g, "");
  word = word.replace(/\"/g, "");
  word = word.replace(/\!/g, "");
  word = word.replace(/\?/g, "");
  word = word.replace(/\'/g, "");
  word = word.replace(/\"/g, "");
  word = word.replace(/\"/g, "");
  word = word.replace(/\:/g, "");
  word = word.replace(/\;/g, "");
  word = word.replace(/\./g, "");
  toggleUnderline(this);
  console.log("id is " + this.id);
  var rect = this.getBoundingClientRect();
  console.log(rect.top);
  if (this.classList.contains("engl")) {
    // words.innerHTML += " " + word;
  } else {
    //transl.innerHTML += " " + word;
  }
  if (this.classList.contains("red")) {
    let id = this.id;
    $(document.ready).ready(function() {
      $.post(
        "php/underlined.php",
        {
          id: id,
          book: book,
          user: user
        },
        function(data, status) {}
      );
    });
  } else {
    let id1 = this.id;
    $(document.ready).ready(function() {
      $.post(
        "php/not_underlined.php",
        {
          id: id1,
          user: user
        },
        function(data, status) {}
      );
    });
  }
}

function toggleUnderline(element) {
  $(element).toggleClass("red");
}
/*
document.getElementById("cancel").addEventListener("click", () => {
  words.innerHTML = "";
  transl.innerHTML = "";
});


document.getElementById("submit").addEventListener("click", () => {
  $(document.ready).ready(function() {
    if (words.innerHTML !== "" && transl.innerHTML !== "") {
      $.post(
        "php/favourites.php",
        {
          engl: words.innerHTML,
          transl: transl.innerHTML,
          user: user,
          book: book
        },
        function(data, status) {
          words.innerHTML = "";
          transl.innerHTML = "";
          console.log(book + "_favourites");
        }
      );
    }
  });
});
*/
$(document.ready).ready(function() {
  $.post(
    "php/show_underlined.php",
    {
      user: user
    },
    function(data, status) {
      var data = JSON.parse(data);

      for (let a = 0; a < data.length; a++) {
        var word = data[a].underlined;
        if (data[a].book == book) {
          document.getElementById(word).classList.add("red");
        }
      }
    }
  );
});

document.addEventListener("touchstart", handleTouchStart, false);
document.addEventListener("touchmove", handleTouchMove, false);

var xDown = null;
var yDown = null;

function getTouches(evt) {
  return (
    evt.touches || evt.originalEvent.touches // browser API
  ); // jQuery
}

function handleTouchStart(evt) {
  const firstTouch = getTouches(evt)[0];
  xDown = firstTouch.clientX;
  yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }

  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;

  var xDiff = xDown - xUp;
  var yDiff = yDown - yUp;

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    /*most significant*/
    if (xDiff > 0) {
      if (pageNumber < document.getElementsByClassName("item").length - 1) {
        document.getElementById("name").innerHTML = "";
        if (pageNumber == 0) {
          console.log(0000);
        } else {
          document.getElementsByClassName("item")[
            pageNumber - 1
          ].style.display = "none";
          document.getElementsByClassName("item1")[
            pageNumber - 1
          ].style.display = "none";
        }
        document.getElementsByClassName("item")[pageNumber].style.display =
          "none";
        document.getElementsByClassName("item1")[pageNumber].style.display =
          "none";
        if (click == 0) {
        } else {
          pageNumber++;
        }
        click++;
        document.getElementsByClassName("item")[pageNumber].style.display =
          "block";
        document.getElementsByClassName("item1")[pageNumber].style.display =
          "block";
        document.getElementById("pageNumber").innerHTML =
          Number(pageNumber) +
          1 +
          "/" +
          document.getElementsByClassName("item").length;
      }
    } else {
      if (pageNumber > 0) {
        if (pageNumber == 0) {
          document.getElementById("name").innerHTML =
            'Ray Bradbury The Sound of Thunder Рей Бредбері "І вдарив грім"';
        }
        pageNumber = pageNumber - 1;
        document.getElementsByClassName("item")[pageNumber + 1].style.display =
          "none";
        document.getElementsByClassName("item1")[pageNumber + 1].style.display =
          "none";

        document.getElementsByClassName("item")[pageNumber].style.display =
          "block";
        document.getElementsByClassName("item1")[pageNumber].style.display =
          "block";

        document.getElementById("pageNumber").innerHTML =
          pageNumber + 1 + "/" + document.getElementsByClassName("item").length;
      }
    }
  }
  /* reset values */
  xDown = null;
  yDown = null;
}

document.getElementById("container").focus();
