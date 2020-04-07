$(document.ready).ready(function() {
  document.getElementById("container").focus();
  $.post(
    "php/show_favourites.php",
    {
      user: user
    },
    function(data, status) {
      var data = JSON.parse(data);

      for (let a = 0; a < data.length; a++) {
        var engl = data[a].engl;
        var ukr = data[a].ukr;
        let item = document.createElement("div");
        let item1 = document.createElement("div");
        let number = document.createElement("div");
        let number1 = document.createElement("div");
        number.setAttribute("class", "number");
        number1.setAttribute("class", "number");

        var t = document.createTextNode(engl);
        var b = document.createTextNode(ukr);
        var c = document.createTextNode(a + 1);
        var d = document.createTextNode(a + 1);
        item.setAttribute("class", "item");
        item.setAttribute("id", a);
        item1.setAttribute("class", "item1");
        item1.setAttribute("id", "item" + a);
        document.querySelector("#container").appendChild(item);
        document.querySelector("#container").appendChild(item1);
        item.appendChild(t);
        item1.appendChild(b);

        document.getElementById("item" + a).appendChild(number1);

        document.getElementById(a).appendChild(number);
        item.style.color = "white";
        item1.style.color = "white";

        number.appendChild(c);
        number1.appendChild(d);
        if (a % 1 == 0) {
          item.style.backgroundImage =
            "url('https://ak5.picdn.net/shutterstock/videos/9439175/thumb/1.jpg')";
          item1.style.backgroundImage =
            "url('https://static.vecteezy.com/system/resources/previews/000/113/007/non_2x/orange-geometric-low-poly-vector-background.jpg')";
        }
        if (a % 2 == 0) {
          item.style.backgroundImage =
            "url('https://media.gettyimages.com/videos/4k-abstract-particles-background-animation-loopable-video-id802662418?s=640x640')";
          item1.style.backgroundImage =
            "url('https://backgrounddownload.com/wp-content/uploads/2018/09/purple-background-images-hd-5.jpg')";
        }
        if (a % 3 == 0) {
          item.style.backgroundImage =
            "url('https://image.freepik.com/free-vector/bright-polygonal-turquoise-background_1035-6011.jpg')";
          //item1.style.background = "orange";
          item1.style.backgroundImage =
            "url('https://videohive.img.customer.envatousercontent.com/files/fed25aa1-c3b9-4178-af88-b3901f10aa7e/inline_image_preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&max-h=8000&max-w=590&s=5c3bc6d4e6d9437aca43bf4916b2db9d')";
        }
        if (a % 4 == 0) {
          item.style.backgroundImage =
            "url('https://ak9.picdn.net/shutterstock/videos/20107759/thumb/1.jpg')";
          item1.style.backgroundImage =
            "url('https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/4925335/580/387/m1/fpnw/wm1/geometric-background-blue-12-k-.jpg?1534688749&s=0dcbbe186e62b3b7db10e8c4d2dd4411')";
        }
        if (a % 5 == 0) {
          item.style.backgroundImage =
            "url('https://ak6.picdn.net/shutterstock/videos/9439196/thumb/1.jpg')";
          item1.style.backgroundImage =
            "url('https://ak1.picdn.net/shutterstock/videos/10439771/thumb/1.jpg')";
        }
      }
    }
  );
});
