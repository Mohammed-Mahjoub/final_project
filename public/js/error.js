document.addEventListener("DOMContentLoaded", function() {
    var body = document.body;
    var arrayColor = [
      "#ff6600",
      "#ff0000",
      "#880000",
      "#ff9933",
      "#ff3300",
      "yellow"
    ];
    setInterval(createStar, 50);
    //createStar();
    function createStar() {
      var right = Math.floor(Math.random() * 500);
      var top = Math.floor(Math.random() * screen.height);
      var star = document.createElement("div");
      star.classList.add("star");
      body.appendChild(star);
      star.style.top = top + "px";
      star.style.background =
        arrayColor[Math.floor(Math.random() * arrayColor.length)];
      setInterval(runStar, 20);
      function runStar(top) {
        if (right >= screen.width) {
          star.remove();
        } else {
          right += 3;
          star.style.right = right + "px";
        }
        setTimeout(function(){
          star.remove();
        },6000);
      }
    }
  });
  