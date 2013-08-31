/**
 * Sean Fisher 2012
 *
**/
var SF = {};

$(document).ready(function () {
    window.scroll(0,0)
    
    $('#nav-toggle').click(function()
    {
        console.log('click');
        $('.nav-wrap').slideToggle()
    });

    $('.btn[data-type]').click(function(e)
    {
        e.preventDefault();
        var type = $(this).data('type');

        onComplete = function() {
            if (type == 'message')
                $('#contact-textarea').focus();
            else
                $('#your-name').focus();
        };

        $('form[data-form-type!="'+type+'"]').fadeOut(200);
        $('.alt-btns .btn[data-type!="'+type+'"]').removeClass('btn-primary').addClass('btn-default');

        $('form[data-form-type="'+type+'"]').fadeIn(400, onComplete);
        $('.alt-btns .btn[data-type="'+type+'"]').removeClass('btn-default').addClass('btn-primary');
    });

    $('form.contact-form').submit(function(e)
    {
        e.preventDefault();
        
        $('#contact-error').hide();
        $('#is-robot').val('nope');
        var Data = $(this).serialize(),
            email = $(this).find('input[name="email"]').val();

        $.post('/contact/', Data, function(j)
        {
            
            if (j.status == 'ok')
            {
                $('form.contact-form').slideUp();
                $('#contact-sent').fadeIn();

                _gaq.push(['_trackEvent', 'ContactFrom', 'Submit', email]);
            }
            else
            {
                $('#contact-error').fadeIn();
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
