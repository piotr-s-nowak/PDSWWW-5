var elementCount = 0;
const ANIMATION_DELAY = 100;
function addElement(name,teacher) {
    var list = document.getElementById("listOfGroups");
    var listElement =     document.createElement('li')
    listElement.className = "listElement"
    listElement.onclick = function(){window.location = "../ExerciseWindow/exerciseWindow.php"}
    listElement.style.display = "block";
    var groupName = document.createElement('h3')
    groupName.className = "GroupName"
    groupName.innerText = "GroupName: "+name
    listElement.append(groupName)


    var teacherElement = document.createElement('h3')
    teacherElement.className = "Teacher"
    teacherElement.innerText = "Teacher: "+teacher
    listElement.append(teacherElement)

    // listElement.childNodes.item("GroupName").style.backgroundColor = "black"
    // listElement.childNodes.item("Teacher").style.backgroundColor = "black"
     // list.innerHTML += "<li>"+listHTML+"</li>"
    list.append(listElement)
}
function addElementToList(){
    setTimeout(addElement,ANIMATION_DELAY*elementCount)
    elementCount+=1;
}
function addElements(count){
    var animDelay = 0;
    for (var i = 0;i<count;i++){
        setTimeout(function(){
            addElement("name #"+elementCount,"name #"+elementCount++)
        },ANIMATION_DELAY*animDelay++)

    }
}
// const listHTML = "sa"
