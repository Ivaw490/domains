$(document).ready(() =>{
    let $close = $("#X");
    let $a_img = $(".gallery a");
    let $slider_form = $("#slider_form");
    $close.on('click', () => img_close($slider_form));
    $a_img.on('click', e  => img_open(e, $slider_form));
    
});

function img_close($slider_form){     
    $slider_form.hide();
    $("#slider_form img").remove();
    $(".form_bg").css("display","none");
}

function img_open(e, $slider_form){
    e.preventDefault();
    $("#slider_form img").remove();    
    $('<img>', { src: e.target.dataset.src, class: "form_img"}).appendTo($slider_form);
    $(".form_bg").css("display","flex");
    $slider_form.show(); 
    
}