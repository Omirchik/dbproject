

// document.addEventListener('DOMContentLoaded', (event) => {
//     var links = document.getElementsByClassName('reg-link');
    
//     for (let i = 0; i < links.length; i++) {
//         links[i].addEventListener('click', sayHello);
//     }
    
// });

$(document).ready(function(){
    $('.reg-link').each(function(){
        $(this).click(function(event){
            event.preventDefault();
            var path = $(event.currentTarget).children().first();

            $('#region_id').remove();
            if(path.hasClass('selected')){
                path.removeClass('selected');
            }else{
                $('.selected').each(function(){
                    $(this).removeClass('selected');
                });

                path.addClass('selected');

                
                var reg_id = path.parent().data('id');
                var newIn = $("<input>");
                newIn.attr({ type:'hidden',name:'region_id', value:reg_id, id:'region_id'});
                
                $('.spec_form').append(newIn);

                var route = $('.spec_form').data('route');
                var token = $('.spec_form').find('input[name="_token"]').val();
                var form_data = $('.spec_form');
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: {body : form_data.serialize(), _token : token},
                    success: function(data){
                        
                        var rec = document.querySelector('.reccomandation');
                        rec.innerHTML = '';
                        for(let i=0;i<data.length;i++){
                            
                            var divElem = document.createElement('div');
                            divElem.innerHTML = data[i]['spec_name']+" "+data[i]['univ_name'];
                            rec.appendChild(divElem);
                        }  
                        // console.log(data);
                    }
                });
            }
            
        });
    });
});


