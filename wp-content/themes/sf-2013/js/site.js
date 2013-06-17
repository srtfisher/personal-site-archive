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
    
    // Work Grid
    $( '#ri-grid' ).gridrotator( {
		rows		: 2,
		columns		: 5,
		animType	: 'fadeInOut',
		animSpeed	: 1000,
		interval	: 5000000,
		step		: 1,
		
		preventClick: false,
		
		w480		: {
			rows	: 3,
			columns	: 2
		},
		
		w320		: {
			rows	: 3,
			columns	: 2
		},
		w240		: {
			rows	: 3,
			columns	: 2
		}
	} );
	
	// Click to hide the overlay
	$('section.work .overlay a.right, section.work div.overlay-back').click(function(e)
	{
        e.preventDefault();
        
        // Cool jQuery Animation
        $('section.work .overlay').animate({
            top:        '35%',
        }, 'fast', function()
        {
            $('section.work div.overlay-back').fadeOut();
            
            $('section.work .overlay').animate({
                top: -500,
            }, 100, function()
            {
                $('section.work .overlay').fadeOut();
            });
        });
    });
});

function scrollTo(id)
{
    console.log(( $(id).offset().top)+100);
    console.log(( $(id).offset().top));
     $('html,body').animate({
          scrollTop: ( $(id).offset().top)-100
     },'slow');
}

SF.resetHeader = function()
{
    $('ul#site-nav li.active').removeClass('active');
};
