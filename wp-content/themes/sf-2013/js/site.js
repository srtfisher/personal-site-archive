/**
 * Sean Fisher 2012
 *
**/
var SF = {};

$(document).ready(function () {
    $('form#contact-form').submit(function(e)
    {
        e.preventDefault();
        
        $('#content-error').hide();
        $('#is-robot').val('nope');
        Data = $(this).serialize();
        
        $.post('/contact/', Data, function(j)
        {
            
            if (j.status == 'ok')
            {
                $('form#contact-form').slideUp();
                $('#contact-sent').fadeIn();
            }
            else
            {
                $('#content-error').fadeIn();
            }
        }, 'json');
        
        
    });
    
    // Tooltip
    $('.tipsy').tooltip();
    $('#contact-btn').popover();
});

function scrollTo(id)
{
     $('html,body').animate({
          scrollTop: ( $(id).offset().top)-100
     },'slow');
}

SF.resetHeader = function()
{
    $('ul#site-nav li.active').removeClass('active');
};
