var profs = []
var specs = []
var valid_regids = []
// document.addEventListener('DOMContentLoaded', (event) => {
//     var links = document.getElementsByClassName('reg-link');
    
//     for (let i = 0; i < links.length; i++) {
//         links[i].addEventListener('click', sayHello);
//     }
    
// });

$(document).ready(function(){
    var regids = document.querySelectorAll('.reg_ids');
    
    for(var i = 0; i < regids.length; i++){
        valid_regids.push(regids[i].value);        
    }
    $('.reg-link').each(function(){
        var counter = 0;
        for(var i = 0; i < valid_regids.length; i++){
            if($(this).data('id') == valid_regids[i]){
                counter++;
            }
        }
        if(counter == 0){
            ($(this).children().first().attr("class", "disabled-path"));
            $(this).attr('class', 'disabled-link');
        }
        
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
                        
                        var recomendations = document.querySelector('#recomendations');
                    
                    recomendations.innerHTML = '';
                    for (let i = 0; i < data.length; i++) {
                        var p = data[i]['prof_name'];
                        if(!(profs.includes(p))){
                            profs.push(p);
                        }
                    }
                    for (let i = 0; i < profs.length; i++) {
                        var prof = profs[i];
                        var card = document.createElement("div");
                        var title = document.createElement("h1");
                        var spec_ol = document.createElement('ol');
                        spec_ol.setAttribute('type', 'I');
                        title.innerHTML = 'Что бы стать "' + prof + '" вы должны выбрать одну из следующих специальностей:';
                        card.appendChild(title);
                        card.appendChild(spec_ol);
                        

                        title.classList.add('prof_name');
                        card.classList.add('prof_card');
                        
                        for (let j = 0; j < data.length; j++) {
                            if(data[j]['prof_name'] = prof){
                                if(!(specs.includes(data[j]['spec_name']))){
                                    
                                    var spec_title = document.createElement("h4");
                                    spec_title.innerHTML = data[j]['code'] + ' ' + data[j]['spec_name'] + ':';
                                    var spec_descr = document.createElement('span');
                                    spec_descr.innerHTML = data[j]['spec_description'];

                                    var ol_item = document.createElement('li');
                                    spec_title.classList.add('spec_name');
                                    ol_item.appendChild(spec_title);
                                    ol_item.appendChild(spec_descr);

                                    var about_univ = document.createElement("h5");
                                    about_univ.innerHTML = 'Даннах специальность предоставляется в следующих университетах: ';
                                    about_univ.classList.add('about_univ');
                                    ol_item.appendChild(about_univ);

                                    var universities = document.createElement("ul");
                                    ol_item.appendChild(universities);

                                    spec_ol.appendChild(ol_item);
                                    specs.push(data[j]['spec_name']);
                                }
                                

                                var univ_title = document.createElement("li");
                                univ_title.innerHTML = data[j]['univ_code'] + ' ' + data[j]['univ_name'];
                                universities.appendChild(univ_title);

                            }
                            
                            
                        }
                        specs = [];
                        recomendations.appendChild(card);
                    }

                    profs = [];

                    }
                });
            }
            
        });
    });
});


