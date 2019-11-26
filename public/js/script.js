let subjects2 = {
"казахский /русский язык":["казахская /русская литература"],
"биология":["химия","география"],
"география":["математика","иностранный язык","история", "биология", "всемирная история"],
"русский язык":["русская литература"],
"математика":["география","физика"],
"всемирная история":["география","человек. общество. право", "иностранный язык"],
"химия":["биология","физика"],
"физика":["математика","химия"],
"иностранный язык":["всемирная история","география"],
"человек. общество. право":["всемирная история", "история"],
"казахский язык":["казахская литература"],
"творческий экзамен":["творческий экзамен"],
"русская литература":["русский язык"],
"казахская /русская литература":["казахский /русский язык"],
"казахская литература":["казахский язык"],
"история":["география","человек. общество. право"],
};
let subIndexes = {
    0:[13],
    1:[6, 2],
    2:[4, 8, 15, 1, 5],
    3:[12],
    4:[2, 7],
    5:[2, 9, 8],
    6:[1, 7],
    7:[4, 6],
    8:[5, 2],
    9:[5, 15],
    10:[14],
    11:[11],
    12:[3],
    13:[0],
    14:[10],
    15:[2, 9],
}
let subjects1 = ["казахский /русский язык","биология","география","русский язык","математика",
"всемирная история","химия","физика","иностранный язык","человек. общество. право","казахский язык",
"творческий экзамен","русская литература","казахская /русская литература","казахская литература","история"];

document.addEventListener('DOMContentLoaded', ()=>{
    var aTags = document.querySelectorAll('.card');
    var i;
    for(i = 0; i < aTags.length; i++){
        aTags[i].addEventListener("click", setInputVal, false);
    }
    
});

var submit_form = document.querySelector('.js-form');
submit_form.addEventListener('submit', onSubmit,false);

function onSubmit(event){
    let count = document.querySelectorAll('.selected').length;
    let countUnselectables = document.querySelectorAll('.unselectable').length;

    if(count != 2 && countUnselectables != 15){
        event.preventDefault();
        alert("Choose one more!");
    }
    console.log("Hello world");
}

function setInputVal(e){
    var form = document.querySelector('form');
    var inputDatas = form.elements['item[]'];

    var selectedSubject = e.currentTarget;
    var currentSubjectId = selectedSubject.dataset.id;
    var divSubjects = document.querySelectorAll('.card');
    var input = selectedSubject.querySelector('input');
    var selected;

    if(selectedSubject.classList.contains('selected'))
    {
        input.value = "";
        selected = findFirstSelected(inputDatas);

        if(selected != -1){
            turnOnRelated(divSubjects,selected);
        }else{
            turnOnUnrelated(divSubjects,currentSubjectId);
        }
        selectedSubject.classList.remove("selected");

    }else if(!selectedSubject.classList.contains('unselectable')){
        selectedSubject.classList.add('selected');
        turnOffUnrelated(divSubjects, currentSubjectId);
        
        selected = findFirstSelected(inputDatas);
        if(selected != -1){
            turnOffAll(divSubjects,selected, selectedSubject.dataset.id);
        }
        input.value = selectedSubject.dataset.id;

    }
    

}
function turnOffUnrelated(divSubjects,id){
    for(let i = 0; i < subjects1.length;i++){
        if(i!=id && ifNotRelated(id,i)){
            divSubjects[i].classList.add('unselectable');
        }
    }
}
function turnOffAll(divSubjects,id1,id2){
    for(let i = 0; i < subjects1.length;i++){
        if(i!=id1 && i!=id2){
            divSubjects[i].classList.add('unselectable');
        }
    }
}

function turnOnRelated(divSubjects,id){
    for(let i = 0; i < subjects1.length;i++){
        if(!ifNotRelated(id,i)){
            divSubjects[i].classList.remove('unselectable');    
        }
    }
}
function turnOnUnrelated(divSubjects,id){
    for(let i = 0; i < subjects1.length;i++){
        if(ifNotRelated(id,i)){
            divSubjects[i].classList.remove('unselectable');    
        }
    }
}
function ifNotRelated(key, r){
    var relSubs = subIndexes[key]
    for(var j = 0; j < relSubs.length; j++){
        if(relSubs[j] == r){
            return false;
        }
    }
    return true;
}

function findFirstSelected(inputDatas){
    for(j=0;j<inputDatas.length;j++){
        let input = inputDatas[j];
        if(input.value != "" && input.value != null){
            return j;
        }
    }
    return -1;
}

