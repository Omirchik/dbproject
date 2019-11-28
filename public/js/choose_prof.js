profs = [];
var profCards = document.querySelectorAll('.card-body');
var btn = document.querySelector('#profs-choose-btn');

var popUp = document.querySelector('.bg-modal');
var popUpTitle = document.querySelector('.title');
var popUpText = document.querySelector('.text-content');

prof_descr = []
prof_title = []

document.addEventListener("DOMContentLoaded", function(event) {
    
    for (i = 0; i < profCards.length; i++) {
        var cardText = profCards[i].querySelector('.card-text');
        let text = cardText.textContent.trim();
        var cardTitle = profCards[i].querySelector('.card-title');
        let title = cardTitle.textContent.trim();
        prof_title.push(title);
        prof_descr.push(text);
        cardText.textContent = truncateString(text, prof_title[i].length,200);
    }

    for (i = 0; i < profCards.length; i++) {
        profCards[i].addEventListener('click', addProf, false);
    }
    // Handle Prof Selection
    document.querySelector('.close').addEventListener('click', function(){
        document.querySelector('.bg-modal').style.display = 'none';
    });

    var viewBtns = document.querySelectorAll('.view-btn');
    for (i = 0; i < viewBtns.length; i++) {

        viewBtns[i].addEventListener('click', viewCard, false);

    }
});
function viewCard(e){
    e.preventDefault();

    clickedCardIndex = e.currentTarget.dataset.id;
    
    popUpTitle.textContent = prof_title[clickedCardIndex];
    popUpText.textContent = prof_descr[clickedCardIndex];
    // alert(e.currentTarget.parentElement.parentElement);
    popUp.style.top = window.scrollY+'px';
    popUp.style.display = 'flex';
}


var submit_form = document.querySelector('.profs_form');
submit_form.addEventListener('submit', onSubmit,false);

function onSubmit(event){
    var count = profs.length;
    for(i=0 ;i < count ; i++){
        
        var x = document.createElement("INPUT");
        x.setAttribute("type", "hidden");
        x.setAttribute("value", profs[i]);
        x.setAttribute("name", "item[]");   
        submit_form.appendChild(x);
    }
}



function addProf(e){
    var selectedProf = e.currentTarget;
    var prof_code = selectedProf.dataset.code;


    if(selectedProf.classList.contains('selected')){
        selectedProf.classList.remove('selected');
        removeFromArray(prof_code);
    }else{
        selectedProf.classList.add('selected');
        profs.push(prof_code);
    }
    var count = profs.length;
    if(count > 0){
        if(btn.hasAttribute('disabled')){
            btn.disabled = false;
        }
    }else{
        if(!btn.hasAttribute('disabled')){
            btn.disabled = true;
        }
    }

    console.log(profs);
}

function removeFromArray(item){
    var index = profs.indexOf(item);
    if (index > -1) {
        profs.splice(index, 1);
    }
}
function truncateString(str, k,num){
    if(num >= str.length) return str;
    if(num<=3) return str.slice(0,num)+'...';
    return str.slice(0,num-k)+"...";
}

window.addEventListener('scroll', function() {
    var btn = document.querySelector('#profs-choose-btn');
    btn.style.top = (window.scrollY + 100)+'px';

});