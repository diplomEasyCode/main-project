$(document).on('ready', function() {

    /*----------------Accordion -------------------*/
       $('div.panel-heading').on('click', function(e) {
        var currentId = $(this).attr('id');
        $(".sprite_accordion").css('background-position', 'top');
        $("#" + currentId +" "+".sprite_accordion").css('background-position', 'bottom');
        $('.panel-heading').css('background', '#fff');
        $("#" + currentId).css('background', '#ebc339');
       
    });

    /*----------------AJAX Send Form -------------------*/
           $('#modal_submit').on('click', function(e) {
            e.preventDefault();
            var FormData;
            FormData = $(this).serialize(); 
            console.log(FormData);
            $.ajax({
            type: "POST", 
            url: "../send.php", 
            data: FormData,
            success: function() {
                   alert("Ваше письмо было отправлено!");
            }
            });
        });

    /*----------------Gallery -------------------*/
    $(".fancybox")
        .attr('rel', 'gallery')
        .fancybox({
            padding : 7
        });
});