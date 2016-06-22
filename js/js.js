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


    /*----------------------Pop Up---------------------*/
        $(".table>tbody>tr>td").on('click', function(){
            var TimeData;
            TimeData = $(this).text();
            $("#time").attr('value',TimeData);
            if ($(this).hasClass('firstDate')) {
                    var DateToEnroll = $('.table>tbody>tr>th:first').text();
                    $('#day').attr('value', DateToEnroll);
                }
            else if ($(this).hasClass('secondDate')) {
                    var DateToEnroll = $(".table>tbody>tr>th:nth-child(2)").text();
                    $('#day').attr('value', DateToEnroll);
                }
            else if ($(this).hasClass('thirdDate')) {
                var DateToEnroll = $('.table>tbody>tr>th:nth-child(3)').text();
                $('#day').attr('value', DateToEnroll);
            }
            else if ($(this).hasClass('fouthDate')) {
                var DateToEnroll = $('.table>tbody>tr>th:nth-child(4)').text();
                $('#day').attr('value', DateToEnroll);
            }
            else if ($(this).hasClass('fifthDate')) {
                var DateToEnroll = $('.table>tbody>tr>th:nth-child(5)').text();
                $('#day').attr('value', DateToEnroll);
            }
            else if ($(this).hasClass('sixDate')) {
                var DateToEnroll = $('.table>tbody>tr>th:nth-child(6)').text();
                $('#day').attr('value', DateToEnroll);
            }
        })
    $(".table2>tbody>tr>td").on('click', function(){
        var TimeData;
        TimeData = $(this).text();
        $("#time").attr('value',TimeData);
        if ($(this).hasClass('firstDate')) {
            var DateToEnroll = $('.table2>tbody>tr>th:first').text();
            $('#day').attr('value', DateToEnroll);
        }
        else if ($(this).hasClass('secondDate')) {
            var DateToEnroll = $(".table2>tbody>tr>th:nth-child(2)").text();
            $('#day').attr('value', DateToEnroll);
        }
        else if ($(this).hasClass('thirdDate')) {
            var DateToEnroll = $('.table2>tbody>tr>th:nth-child(3)').text();
            $('#day').attr('value', DateToEnroll);
        }
        else if ($(this).hasClass('fouthDate')) {
            var DateToEnroll = $('.table2>tbody>tr>th:nth-child(4)').text();
            $('#day').attr('value', DateToEnroll);
        }
        else if ($(this).hasClass('fifthDate')) {
            var DateToEnroll = $('.table2>tbody>tr>th:nth-child(5)').text();
            $('#day').attr('value', DateToEnroll);
        }
        else if ($(this).hasClass('sixDate')) {
            var DateToEnroll = $('.table2>tbody>tr>th:nth-child(6)').text();
            $('#day').attr('value', DateToEnroll);
        }
    })
    /*--------------------Create Table-----------------*/
    var date = new Date();
    function creTable1() {
        $('.table').append('<tr></tr>');
        for(j=0;j<=5;j++) {
            var options = {
                weekday: 'short',
                month: 'long',
                day: 'numeric'
            };
            var myDate = new Date();
            var dayOfMonth = myDate.getDate();
            myDate.setDate(dayOfMonth +j);
            $('.table > tbody > tr:first').append('<th>'+ myDate.toLocaleString("ru", options) +'</th>');
        }
    }
    creTable1();
    var date = new Date();
    function creTable2() {
        $('.table2').append('<tr></tr>');
        for(j=6;j<=11;j++) {
            var options = {
                weekday: 'short',
                month: 'long',
                day: 'numeric'
            };
            var myDate = new Date();
            var dayOfMonth = myDate.getDate();
            myDate.setDate(dayOfMonth +j);
            $('.table2 > tbody > tr:first').append('<th>'+ myDate.toLocaleString("ru", options) +'</th>');
        }
    }
    creTable2();
    /*-------------------More Reviews-------------------*/
    $('.people_say .more').on('click', function(e){
        e.preventDefault();
        $('.people_say .hide-row').show(1000);
    })
    /*-------------------Slide Naviation----------------*/
    $('.next-slide').on('click', function(){
        $('.next-slide').addClass('disabled-button');
        $('.prev-slide').removeClass('disabled-button');
        $('.class-1').hide(1000);
        $('.class-2').show(1000);
    })
    $('.prev-slide').on('click', function(){
        $('.prev-slide').addClass('disabled-button');
        $('.next-slide').removeClass('disabled-button');
        $('.class-2').hide(1000);
        $('.class-1').show(1000);
    })


    /*-------------------thanks page----------------*/
    $('')

});