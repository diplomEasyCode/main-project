$(document).on('ready', function() {

    /*----------------Accordion -------------------*/
       $('div.panel-heading').on('click', function(e) {
        var currentId = $(this).attr('id');
        $(".sprite_accordion").css('background-position', 'top');
        $("#" + currentId +" "+".sprite_accordion").css('background-position', 'bottom');
        $('.panel-heading').css('background', '#fff');
        $("#" + currentId).css('background', '#ebc339');
       
    });


    /*----------------Gallery -------------------*/
    $(".fancybox")
        .attr('rel', 'gallery')
        .fancybox({
            padding : 7
        });


    /*----------------AJAX Send Form -------------------*/
        $("#modal_submit").on('submit', function(e) {
    		e.preventDefault();
            var FormData;
            FormData = $(this).serialize(); 
            console.log(FormData);
            $.ajax({
            type: "POST", 
            url: "../send.php", 
            data: FormData,
            success: function() {
                   alert("Your message has been sent!");
            }
            });
        });

    /*----------------------Pop Up---------------------*/
        $("td").on('click', function(){
            var TimeData;
            TimeData = $(this).text();
            $("#time").attr('value',TimeData);
            if ($(this).hasClass('firstDate')) {
                    var DateToEnroll = $('th:first').text();
                    $('#day').attr('value', DateToEnroll);
                }
            else if ($(this).hasClass('secondDate')) {
                    var DateToEnroll = $('th:nth-child(2)').text();
                    $('#day').attr('value', DateToEnroll);
                }
            else if ($(this).hasClass('thirdDate')) {
                var DateToEnroll = $('th:nth-child(3)').text();
                $('#day').attr('value', DateToEnroll);
            }
            else if ($(this).hasClass('fouthDate')) {
                var DateToEnroll = $('th:nth-child(4)').text();
                $('#day').attr('value', DateToEnroll);
            }
            else if ($(this).hasClass('fifthDate')) {
                var DateToEnroll = $('th:nth-child(5)').text();
                $('#day').attr('value', DateToEnroll);
            }
            else if ($(this).hasClass('sixDate')) {
                var DateToEnroll = $('th:nth-child(6)').text();
                $('#day').attr('value', DateToEnroll);
            }
        })
    /*--------------------Create Table-----------------*/
    function getWeekDay(date) {
        var days = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];

        return days[date.getDay()];
    }
    function DateDays(date) {
        var dd = date.getDate();
        return dd;
    }
    function getMounth(date) {
        var days = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];

        return days[date.getMonth()];
    }


    var date = new Date();
    function creTable() {
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
                $('.table > tbody > tr:first').append('<th>'/*+ getWeekDay(date) +', ' + DateDays(date) +' ' + getMounth(date) +*/+ myDate.toLocaleString("ru", options) +'</th>');
            }
    }
    creTable();





});