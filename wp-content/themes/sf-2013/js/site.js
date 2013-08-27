/**
 * Sean Fisher 2012
 *
**/
var SF = {};

$(document).ready(function () {
    $('#nav-toggle').click(function()
    {
        $('.nav-wrap').slideToggle()
    });

    $('.btn[data-type]').click(function(e)
    {
        e.preventDefault();
        type = $(this).data('type');

        $('form[data-form-type!="'+type+'"]').fadeOut(200);
        $('.alt-btns .btn[data-type!="'+type+'"]').removeClass('btn-primary').addClass('btn-default');

        $('form[data-form-type="'+type+'"]').fadeIn();
        $('.alt-btns .btn[data-type="'+type+'"]').removeClass('btn-default').addClass('btn-primary');
    });

    $('form.contact-form').submit(function(e)
    {
        e.preventDefault();
        
        $('#content-error').hide();
        $('#is-robot').val('nope');
        Data = $(this).serialize();
        
        $.post('/contact/', Data, function(j)
        {
            
            if (j.status == 'ok')
            {
                $('form.contact-form').slideUp();
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

SF.showContactMessage = function() {

};

SF.showProjectMessage = function() {

};

function scrollTo(id)
{
    offset = $('#global-header').height() + 10;
     $('html,body').animate({
          scrollTop: ( $(id).offset().top)-offset
     },'slow');
}

SF.resetHeader = function()
{
    $('ul#site-nav li.active').removeClass('active');
};
