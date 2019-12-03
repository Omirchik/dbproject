// document.addEventListener('DOMContentLoaded', function(event){

    

    // var h4 = document.querySelector('.pos');
    // var pos = getOffset(h4);

    // var btn = document.querySelector(".mybtn");
    // btn.style.position = "absolute";
    // btn.style.left = pos.left+'px';
    // btn.style.top = pos.top+'px';
    
    
    // console.log("Hello world");
// });

// function getOffset(el) {
//     const rect = el.getBoundingClientRect();
//     return {
//       left: rect.left + window.scrollX,
//       top: rect.top + window.scrollY
//     };
//   }

var submit_btn = document.querySelector('#mybtn');
var subheader_height = document.querySelector('.subheader').clientHeight - 200;

document.addEventListener('DOMContentLoaded', ()=>{
  submit_btn.style.display = 'none';
});

window.addEventListener('scroll', function() {
    if(subheader_height < 0){
      subheader_height = document.querySelector('.subheader').clientHeight - 200;
    }
    if(this.window.scrollY > subheader_height){
        submit_btn.style.display = 'block';
    }else{
        submit_btn.style.display = 'none';
    }
    // this.console.log(subheader_height);
});