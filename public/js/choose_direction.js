dirs = [];
var dirCards = document.querySelectorAll('.card-dir');

document.addEventListener("DOMContentLoaded", function(event) {
    
    for (i = 0; i < dirCards.length; i++) {
        dirCards[i].addEventListener('click', addDir, false);
    }
});

var submit_form = document.querySelector('.direction_form');
submit_form.addEventListener('submit', onSubmit,false);

function onSubmit(event){
    var count = dirs.length;
    for(i=0 ;i < count ; i++){
        
        var x = document.createElement("INPUT");
        x.setAttribute("type", "hidden");
        x.setAttribute("value", dirs[i]);
        x.setAttribute("name", "item[]");   
        submit_form.appendChild(x);        
    }
}

function addDir(e){
    var selectedDir = e.currentTarget;
    var dirText = selectedDir.textContent.trim();
    var btn = document.querySelector('#direction-choose-btn');

    if(selectedDir.classList.contains('selected-dir')){
        removeFromArray(dirText);
        selectedDir.classList.remove('selected-dir');
        if(dirs.length == 2){
            for(i=0; i<dirCards.length;i++){
                if(dirCards[i].classList.contains('unselectable-dir')){
                    dirCards[i].classList.remove('unselectable-dir');
                }
            }
        }
    }else{
        if(!selectedDir.classList.contains('unselectable-dir')){
            selectedDir.classList.add('selected-dir');
            dirs.push(dirText);
        }
    }
    var count = dirs.length;

    if(count > 0){
        if(btn.hasAttribute('disabled')){
            btn.disabled = false;
        }
    }else{
        if(!btn.hasAttribute('disabled')){
            btn.disabled = true;
        }
    }

    if(count > 2){
        for(i=0; i < dirCards.length; i++){
            if(!dirCards[i].classList.contains('selected-dir')){
                dirCards[i].classList.add('unselectable-dir');
            }
        }
    }
    
}

function removeFromArray(item){
    var index = dirs.indexOf(item);
    if (index > -1) {
     dirs.splice(index, 1);
    }
}

var submit_btn = document.querySelector('#direction-choose-btn');

window.addEventListener('scroll', function() {
    submit_btn.style.top = (window.scrollY + 500)+'px';

});