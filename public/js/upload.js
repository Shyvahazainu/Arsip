function updateLabel() {
    var input = document.getElementById("file");
    var label = document.getElementById("file-name");

    if (input.files.length > 0) {
        label.innerText = input.files[0].name;
    } else {
        label.innerText = "Browse";
    }
}
