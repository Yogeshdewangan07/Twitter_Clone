function deletePost(element) {
    let post_id = element.getAttribute("data-post_id");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/delete.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data === "success") {
                    location.href = "home.php";
                }
            }
        }
    };
    xhr.send("postid=" + post_id);
}