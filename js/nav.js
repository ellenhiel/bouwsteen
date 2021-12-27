    var e = document.querySelector(".closed");
    var a = document.querySelector(".opened");
    var div1 = document.querySelector(".div1");
    var div2 = document.querySelector(".div2");
    var div3 = document.querySelector(".div3");
    e.addEventListener("click", (function (n) {
        if (a.style.display === "none") {
            a.style.display = "block";
            div1.style.transform = "rotate(45deg)";
            div1.style.marginTop = "15px";
            div2.style.display = "none";
            div3.style.transform = "rotate(-45deg)";
            div3.style.marginTop = "-4px";
        } else {
            a.style.display = "none";
            div1.style.transform = "rotate(0deg)";
            div1.style.marginTop = "5px";
            div2.style.display = "block";
            div3.style.transform = "rotate(0deg)";
            div3.style.marginTop = "5px";
        }
        n.preventDefault();
    }))

    window.addEventListener("resize", function() {
        if(window.innerWidth > 750) {
            a.style.display = "none";
        }
    });