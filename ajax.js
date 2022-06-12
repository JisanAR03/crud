console.log("ajax.js");
let load_btn = document.getElementById("load_btn");
load_btn.addEventListener("click", load_btn_click);
function load_btn_click() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "showdata.php", true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            let text = xhr.responseText;
            let table_body = document.getElementById("table_body");
            table_body.innerHTML = text;
        }
    };
    xhr.send();
}