jQuery(document).ready(function($) {

    var heroHeight = $('.hero-image').height();

    // add inverse header class to pages with hero image
    if ($('div').hasClass('hero-image') && $(window).scrollTop() <= heroHeight) {
        $('header').addClass('header-inverse');
    }

    // remove inverse header class on scroll
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll >= heroHeight) {
            $('header').removeClass('header-inverse');
        } else {
            $('header').addClass('header-inverse'); 
        }
    });

    // expand search bar in navigation
    $('.search-form').hide();

    $('.search-button').on('click', function() {
        $('.search-form').animate({'width': 'toggle'});
        $('.search-field').focus();
    });

    $('.search-form').on('focusout', function () {
        $('.search-form').animate({'width': 'toggle'});
    });

    /** archive select redir
     * source https://stackoverflow.com/questions/5150363/onchange-open-url-via-select-jquery/5150421?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa 05/17/2018
     */
    $('.archive-select').change(function() {
        var url = $(this).val();
          if (url) {
              window.location = url;
          }
          return false;
    });

});