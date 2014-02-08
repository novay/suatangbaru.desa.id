$(function(){
   
    
   
    
    
    
    // control for responsive
    $(window).resize(function(){
        if(sessionStorage.mode == 4){
            // control for responsive
            if($(window).width() > 767){
                data_scroll = 60 - parseInt($(this).scrollTop());
                $('.side-left, .side-right').css({
                    'top' : data_scroll+'px'
                });
                $('body, html').animate({
                    scrollTop : 0
                })
            }
            else{
                $('.side-left, .side-right').css({
                    'top' : '0px'
                });
            }
        }
        else{
            if($(window).width() <= 767){
                $('.side-left, .side-right').css({
                    'top' : '0px'
                });
            }
            else{
                $('.side-left, .side-right').css({
                    'top' : '60px'
                });
            }
        }
    });
    
    
    // scrolling event
    $(window).scroll(function() {
        
        // this for hide/show button to-top
        if($(this).scrollTop() > 480) {
            $('a[rel=to-top]').fadeIn('slow');	
        } else {
            $('a[rel=to-top]').fadeOut('slow');
        }
        
        // this for sincronize active sidebar item
        if($(this).scrollTop() > 35){
            $('.sidebar > li:first-child.active').removeClass('first');
        }
        else{
            $('.sidebar > li:first-child.active').addClass('first');
        }
        
        if(sessionStorage.mode){
            if(sessionStorage.mode == 4){
                if($(this).scrollTop() > 60){
                    $('.side-left, .side-right').css({
                        'top' : '0px'
                    });
                }
                else{
                    // control for responsive
                    if($(window).width() > 767){
                        data_scroll = 60 - parseInt($(this).scrollTop());
                        $('.side-left, .side-right').css({
                            'top' : data_scroll+'px'
                        });
                    }
                    else{
                        $('.side-left, .side-right').css({
                            'top' : '0px'
                        });
                    }
                }
            }
            else{
                $('.header').css({
                    'top' : '0px'
                });
            }
        }
        
    });
    
    $('a[rel=to-top]').click(function(e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop:0
        }, 'slow');
    });
    // end scroll to top
    
    
    // tooltip helper
    $('[rel=tooltip]').tooltip();	
    $('[rel=tooltip-bottom]').tooltip({
        placement : 'bottom'
    });	
    $('[rel=tooltip-right]').tooltip({
        placement : 'right'
    });	
    $('[rel=tooltip-left]').tooltip({
        placement : 'left'
    });	
    // end tooltip helper
    
    
    // animate scroll, define class scroll will be activate this
    $(".scroll").click(function(e){
        e.preventDefault();
        $("html,body").animate({scrollTop: $(this.hash).offset().top-60}, 'slow');
    });
    // end animate scroll
    
    
    // control box
    // collapse a box
    $('.header-control [data-box=collapse]').click(function(){
        var collapse = $(this),
        box = collapse.parent().parent().parent();

        collapse.find('i').toggleClass('icofont-caret-up icofont-caret-down'); // change icon
        box.find('.box-body').slideToggle(); // toggle body box
    });

    // close a box
    $('.header-control [data-box=close]').click(function(){
        var close = $(this),
        box = close.parent().parent().parent(),
        data_anim = close.attr('data-hide'),
        animate = (data_anim == undefined || data_anim == '') ? 'fadeOut' : data_anim;

        box.addClass('animated '+animate);
        setTimeout(function(){
            box.hide()
        },1000);
    });
    // end control box
    
    
})
