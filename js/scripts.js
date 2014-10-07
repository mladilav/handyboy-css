$(document).ready(function(){
    /* animation */

    var i = 0;
    var lastScrollTop = 0;




    $(document).on('click','.signIn',function(){
        $( "#popUps" ).load( "/popUps/login.html" );
        $(".back").removeClass("hide");
    });
    $(document).on('click','.become-handyboy-button',function(){
        $( "#popUps" ).load( "/popUps/register.html" );
        $(".back").removeClass("hide");
    });
    $(document).on('click','.ui-icon-closethick',function(){
        $(".back").addClass("hide");
    });
    $(document).on('click','.ui-dialog-titlebar-close',function(){
        $(".back").addClass("hide");
    });


    $('.accordion-title').click(function(){
        $(this).next('.inner-body').animate({height: "toggle"}, 1000);
        $(this).children('b').remove();
        if($(this).next('.inner-body').hasClass("open"))
        {
            $(this).next('.inner-body').removeClass("open");
            $(this).children('span').before("<b>+</b>");
            $(this).removeClass('active');
            return;
        }
        $(this).next('.inner-body').addClass("open");
        $(this).children('span').before("<b>-</b>");
        $(this).addClass('active');
    });
});