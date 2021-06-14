var elementCount = 0;
const ANIMATION_DELAY = 100;



function addElement(name,teacher,exerciseID,isteacher) {

    var list = document.getElementById("listOfGroups");
    var listElement =     document.createElement('li')
    listElement.className = "listElement"
    if(isteacher === 1){

        listElement.onclick = function(){
            createCookie("exerciseID",exerciseID,1);
            window.location.href = "../TeacherExerciseWindow/TeacherExerciseWindow.php"}
    }else{
        listElement.onclick = function(){
            createCookie("exerciseID",exerciseID,1);
            window.location.href = "../ExerciseWindow/exerciseWindow.php"
        }
    }
    listElement.style.display = "block";
    var groupName = document.createElement('h3')
    groupName.className = "GroupName"
    groupName.innerText = "ExerciseName: "+name
    listElement.append(groupName)


    var teacherElement = document.createElement('h3')
    teacherElement.className = "Teacher"
    teacherElement.innerText = "Deadline: "+teacher
    listElement.append(teacherElement)

    list.append(listElement)
}
function addElementToList(){
    setTimeout(addElement,ANIMATION_DELAY*elementCount)
    elementCount+=1;
}
function addElements(count,isteacher){
    console.log(isteacher)
    var animDelay = 0;
    for (var i = 0;i<count;i++){
        setTimeout(function(){
            addElement("name #"+elementCount,"deadline #"+elementCount++,isteacher)
        },ANIMATION_DELAY*animDelay++)

    }
}

function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}
// const listHTML = "sa"
