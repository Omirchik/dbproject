profs = [];
var profCards = document.querySelectorAll('.card-body');
var btn = document.querySelector('#profs-choose-btn');

document.addEventListener("DOMContentLoaded", function(event) {
    
    for (i = 0; i < profCards.length; i++) {
        var cardText = profCards[i].querySelector('.card-text');
        let s = cardText.textContent.trim();
        cardText.textContent = s;
        cardText.textContent = truncateString(s, profCards[i].querySelector('h5').textContent.length,200);
    }


    for (i = 0; i < profCards.length; i++) {
        profCards[i].addEventListener('click', addProf, false);
    }
    
    


    document.querySelector('.close').addEventListener('click', function(){
        document.querySelector('.bg-modal').style.display = 'none';
    });

});
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
    var prof_name = selectedProf.querySelector('h5').textContent;


    if(selectedProf.classList.contains('selected')){
        selectedProf.classList.remove('selected');
        removeFromArray(prof_name);
    }else{
        selectedProf.classList.add('selected');
        profs.push(prof_name);
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
