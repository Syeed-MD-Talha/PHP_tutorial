

function loadData() {

    const xhr = new XMLHttpRequest();

    xhr.onload = function () {
        const container = document.getElementById("demo");
        demo.innerHTML = xhr.responseText;
    }

    xhr.open('GET', 'dummy.txt');

    xhr.send();

}