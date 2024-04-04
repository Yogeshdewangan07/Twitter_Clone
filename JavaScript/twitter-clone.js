let mainBox3 = document.getElementById('main-box3');
let mainSection = document.getElementById('main-section');

let navOpt1 = document.getElementById('nav-opt1');
navOpt1.addEventListener('click', changeTab1);
function changeTab1(e) {
    let thirdBox = mainSection.lastElementChild.previousElementSibling;
    let fourthBox = mainSection.lastElementChild;
    let option1 = document.getElementById('option1');
    let option2 = document.getElementById('option2');
    thirdBox.style.removeProperty('display');
    fourthBox.style.display = 'none';
    option1.classList.add('for-border');
    option2.classList.remove('for-border');
}


let navOpt2 = document.getElementById('nav-opt2');
navOpt2.addEventListener('click', changeTab2);
function changeTab2(e) {
    let fourthBox = mainSection.lastElementChild;
    let thirdBox = mainSection.lastElementChild.previousElementSibling;
    let option1 = document.getElementById('option1');
    let option2 = document.getElementById('option2');
    thirdBox.style.display = 'none';
    fourthBox.style.removeProperty('display');
    thirdBox.style.removeProperty('border-bottom');
    option2.classList.add('for-border');
    option1.classList.remove('for-border');
}

let tweetBox = document.getElementById('tweet-box');
let mainBox3A = document.getElementById('main-box3-a');
let tweetButton = document.getElementById('tweet-button');
let tweetRow2 = document.getElementsByClassName('tweet-row2');
let textBox = document.getElementById('text');

let fileSource;
let mediaType;
let inputMedia = document.getElementById('input-media');

inputMedia.addEventListener('change', (e) => {
    let tweetMedia = document.createElement('div');
    tweetMedia.classList.add('tweet-media');

    selectedFile = e.target.files[0];
    mediaType = selectedFile.type;

        if (selectedFile.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                fileSource = e.target.result;
                tweetMedia.appendChild(imgElement);
            };
            var icon = document.createElement('i');
            icon.classList.add('fa-regular', 'fa-circle-xmark');
            var crossBtn = document.createElement('div');
            crossBtn.classList.add('crossBtn');
            crossBtn.appendChild(icon);
            crossBtn.addEventListener('click', function () {
                tweetBox.removeChild(tweetMedia);
            });
            tweetMedia.appendChild(crossBtn);

            tweetBox.appendChild(tweetMedia);
            reader.readAsDataURL(selectedFile);
        } else if (selectedFile.type.startsWith('video/')) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const vedioElement = document.createElement('video');
                vedioElement.src = e.target.result;
                fileSource = e.target.result;
                vedioElement.controls = 'true';
                tweetMedia.appendChild(vedioElement);
            };

            let icon = document.createElement('i');
            icon.classList.add('fa-regular', 'fa-circle-xmark');
            let crossBtn = document.createElement('div');
            crossBtn.classList.add('crossBtn');
            crossBtn.appendChild(icon);
            crossBtn.addEventListener('click', function () {
                tweetBox.removeChild(tweetMedia);
            });
            tweetMedia.appendChild(crossBtn);

            tweetBox.appendChild(tweetMedia);
            reader.readAsDataURL(selectedFile);
        }
  });

let customContainer = document.getElementById('custom-container');
let parentElement;
let articleElement;
function optionButton(e) {
    articleElement = e.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
    parentElement = articleElement.parentNode.parentNode;
    articleElement.classList.add('article');
    articleElement.appendChild(customContainer);
    parentElement.classList.add('delete');
    customContainer.style.removeProperty('display');
}

let crossIcon = document.getElementById('cross-icon');
function closeTab(e) {
    parentElement.classList.remove('delete');
    customContainer.style.display = 'none';
    articleElement.classList.remove('article');
    articleElement.removeChild(customContainer);
}

let moreButton = document.getElementById('tooltip');
let headerPanel = document.getElementById('header-panel');

function tooltipButton(e) {
    moreButton.style.removeProperty('display');
    headerPanel.appendChild(moreButton);
}

function closeTab2(e) {
    moreButton.style.display = 'none';
    headerPanel.removeChild(moreButton);
}