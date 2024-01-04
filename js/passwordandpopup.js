function showgrid() {
    document.getElementById("overlay").style.display = "flex"
}

function handleKeyPress(event) {
    13 === event.keyCode && checkpassword()
}

function closepopup() {
    var overlaydiv = document.getElementById("overlay");
    overlaydiv.classList.add("closed"), setTimeout((function() {
        overlaydiv.style.display = "none", overlaydiv.classList.remove("closed")
    }), 1e3)
}

function checkpassword() {
    var passwordinput;
    if ("admin" === document.getElementById("passwordinput").value) {
        alert("Password Matched."), document.getElementById("slider-image").style.display = "block";
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: !0,
            centeredSlides: !0,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: !0
            },
            pagination: {
                el: ".swiper-pagination"
            }
        });
        document.getElementById("overlay").style.display = "none"
    } else alert("Incorrect password. Try again.")
}