const form = document.querySelector(".main-box2-creater form"),
    tweetBtn = form.querySelector(".button input");

form.onsubmit = (e) => {
    e.preventDefault();
};

tweetBtn.onclick = () => {
    // AJAX request to submit the tweet
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/tweet.php", true);
    xhr.onload = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var data = xhr.response;
                if (data === "success") {
                    location.href = "home.php";
                }
                else {
                    console.error("Tweet submission failed:", data);
                }
            }
        }
    };
    var formData = new FormData(form);
    xhr.send(formData);
};

