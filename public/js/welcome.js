document.addEventListener('DOMContentLoaded', function(event){

    

    // var h4 = document.querySelector('.pos');
    // var pos = getOffset(h4);

    // var btn = document.querySelector(".mybtn");
    // btn.style.position = "absolute";
    // btn.style.left = pos.left+'px';
    // btn.style.top = pos.top+'px';
    
    
    // console.log("Hello world");
});

function getOffset(el) {
    const rect = el.getBoundingClientRect();
    return {
      left: rect.left + window.scrollX,
      top: rect.top + window.scrollY
    };
  }