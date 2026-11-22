// read more / read less button

var btn = document.getElementById("read-btn");
var moreText = document.getElementById("more-text");

btn.addEventListener("click", function () {
    // hide or show the extra text
    moreText.classList.toggle("about-hidden");

    // change the button words
    if (moreText.classList.contains("about-hidden")) {
        btn.textContent = "Read More";
    } else {
        btn.textContent = "Read Less";
    }
});
