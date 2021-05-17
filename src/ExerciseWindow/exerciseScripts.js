function showHints() {
    document.getElementById("hintsList").style.display = "block";
    document.getElementById("showHintsButton").style.display = "none";
}

function goBack() {
    window.history.back();
}

var files;

function sendFile() {
    setDifficulty(4);
    setDeadline("12-13-1234");
    alert('Selected files: ' + files.item(0).name);
    var stat = document.getElementById('status');
    stat.innerHTML = "Waiting for review      <img src=\"../Assets/hourglass.png\" alt=\"status icon\" id = \"statusImg\">";


}

function showname() {

    var name = document.getElementById('file-upload');
    alert('Selected files: ' + name.files.item(0).name);
    var label = document.getElementById('selectLabel');
    label.innerText = name.files.item(0).name
    files = name.files


}

function setDifficulty(level) {
    var span = document.getElementsByClassName("inner-circle")
    for (var i = 1; i <= level && i <= 5; i++) {
        span[i - 1].style.backgroundColor = getColorString(level);
        span[i - 1].style.borderColor = getColorString(level);

    }


}

function getColorString(difficultyLevel) {
    switch (difficultyLevel) {
        case 3:
            return "#e6e600";
            break;
        case 4:
            return "#ff9900";
            break;
        case 5:
            return "#ff0000";
            break;
        default:
            return "#00b33c";
            break;
    }
}
function setDeadline(date){
    var deadline = document.getElementById('deadline');
    deadline.innerText = date.toString();
}
