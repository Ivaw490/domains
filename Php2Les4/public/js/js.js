$(document).ready(() =>{
    let $slider_form = $("#slider_form");
    $("#X").on('click', () => img_close($slider_form));
    $(".gallery").on('click', e  => img_open(e, $slider_form));
    $("#addMore").on("click", e => ajaxFunc(e));
});

function img_close($slider_form){     
    $slider_form.hide();
    $("#slider_form img").remove();
    $(".form_bg").css("display","none");
}

function img_open(e, $slider_form){
    e.preventDefault();
    if(e.target.dataset.src){
        $('<img>', {
            src: e.target.dataset.src,
            class: "form_img"
        }).appendTo($slider_form);
        $(".form_bg").css("display","flex");
        $slider_form.show();
    }
}

function ajaxFunc(e){
    e.preventDefault();
    let count = $(".gallery").children('.gallery-item').length;
    $.ajax({
        url: "addMore.php",
        method: "POST",
        data: {COUNT: count},
        success: function(response){
            let result = JSON.parse(response);
            $(".gallery").append(result.html);
            if(result.End =='end') {
                $("#div-addMore").css("display", "none");
            }
        },
        error: function () {
            console.log('Что-то пошло не так');
        }
    });
}