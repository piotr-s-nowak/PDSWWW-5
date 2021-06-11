function showHints() {
    document.getElementById("hintsList").style.display = "block";
    document.getElementById("showHintsButton").style.display = "none";
}

function goBack() {
    window.history.back();
}

var files;

function sendFile() {
    setDifficulty(1);
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

function setDeadline(date) {
    var deadline = document.getElementById('deadline');
    deadline.innerText = date.toString();
}

function openCollapsible() {
    var content = document.querySelector('#content')
    content.classList.toggle('show')
    var req = document.querySelector('#requirements')
    req.classList.toggle('show')
    var hints = document.querySelector('#hints')
    hints.classList.toggle('show')

}


var elementCount = 0;
const ANIMATION_DELAY = 100;

function addElement(name, date) {
    var dd = String(date.getDate()).padStart(2, '0');
    var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = date.getFullYear();

    var days = mm + '/' + dd + '/' + yyyy;


    var list = document.getElementById("listOfStudents");
    var listElement = document.createElement('li')
    listElement.className = "listElement"
    // listElement.onclick = function(){window.location = "../ExerciseWindow/exerciseWindow.php"}
    listElement.style.display = "grid";
    var studentName = document.createElement('h3')
    studentName.className = "Name"
    studentName.innerText = name
    listElement.append(studentName)

    var status = document.createElement('h3')
    status.className = "status"
    status.innerHTML = "&#10004;  &#10068; &#10060;"
    listElement.append(status)

    var dateElement = document.createElement('h3')
    dateElement.className = "uploadDate"
    dateElement.innerText = days
    listElement.append(dateElement)

    var downloadButton = document.createElement('button')
    downloadButton.className = "download"
    downloadButton.innerHTML = " &#128190;"
    listElement.append(downloadButton)


    var namedesc = document.createElement('h4')
    namedesc.className = "NameDesc"
    namedesc.innerText = "name"
    listElement.append(namedesc)
    var datedesc = document.createElement('h4')
    datedesc.className = "DateDesc"
    datedesc.innerText = "upload date"
    listElement.append(datedesc)

    var statusDesc = document.createElement('h4')
    statusDesc.className = "statusDesc"
    statusDesc.innerText = "compilation status"
    listElement.append(statusDesc)


    var downloadDesc = document.createElement('h4')
    downloadDesc.className = "downloadDesc"
    downloadDesc.innerText = "download code"
    listElement.append(downloadDesc)

    var gradeForm = document.createElement('form')
    gradeForm.className = "gradeForm"
    gradeForm.append()

    var gradeLabel = document.createElement('label')
    gradeLabel.className = "gradeClass"
    gradeLabel.innerText = "grade:  "

    gradeForm.append(gradeLabel)

    var gradeInp = document.createElement('input')
    gradeInp.className = "grade"
    gradeInp.type = "number"
    gradeInp.name = "grade"
    gradeInp.min = "2"
    gradeInp.max = "5"
    gradeInp.required = true
    gradeForm.append(gradeInp)


    var submitInp = document.createElement('input')
    submitInp.className = "submitGrade"
    submitInp.type = "submit"
    submitInp.value = "✅"
    gradeForm.append(submitInp)
    listElement.append(gradeForm)
    list.append(listElement)
}

function addElementToList() {
    setTimeout(addElement, ANIMATION_DELAY * elementCount)
    elementCount += 1;
}

var tempDate = new Date()
function addElements(count) {
    var animDelay = 0;
    for (var i = 0; i < count; i++) {
        setTimeout(function () {
            addElement("name #" + elementCount, tempDate)
        }, ANIMATION_DELAY * animDelay++)

    }
}

