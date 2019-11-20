let subjects2 = {"биология":["химия","география"],
"всемирная история":["география","человек. общество. право", "иностранный язык"],
"география":["математика","иностранный язык","история", "биология", "всемирная история"],
"иностранный язык":["всемирная история","география"],
"казахский /русский язык":["казахская /русская литература"],
"казахский язык":["казахская литература"],
"математика":["география","физика"],
"русский язык":["русская литература"],
"творческий экзамен":["творческий экзамен"],
"физика":["математика","химия"],
"химия":["биология","физика"],
"история":["география","человек. общество. право"],
"казахская литература":["казахский язык"],
"казахская /русская литература":["казахский /русский язык"],
"русская литература":["русский язык"],
"человек. общество. право":["история","всемирная"],
};


let subjects1 = ["биология", "всемирная история", "география", "иностранный язык", "казахский /русский язык",
"казахский язык", "математика", "русский язык", "творческий экзамен", "физика", "химия", "история", "казахская литература",
"казахская /русская литература", "русская литература", "человек. общество. право"];

var theParent = document.querySelector('#subject-links'); 

var i;
for (i = 0; i < subjects1.length; i++) {
    var node = document.createElement("button");             
    var textnode = document.createTextNode(subjects1[i]);
    node.className += "btn btn-outline-primary " + textnode.data;         
    node.appendChild(textnode);                             
    theParent.appendChild(node);
}
theParent.addEventListener("click", doSomthing, false);



function doSomthing(e){
    if(e.target !== e.currentTarget){
        var clickedItem = e.target.className;
        alert("Hello "+ clickedItem);
    }
    e.stopPropagation();

}


document.addEventListener('DOMContentLoaded', ()=>{
    var aTags = document.querySelectorAll('.selectable');
    var i;
    for(i = 0; i < aTags.length; i++){
        aTags[i].addEventListener("click", setInputVal, false);
    }
    console.log("Hello");
});
function setInputVal(e){
    var selectedSubject = e.currentTarget;
    var input = selectedSubject.querySelector('input');
    input.value = selectedSubject.dataset.id;
}



