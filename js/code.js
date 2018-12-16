
var patt = new RegExp('-');


$(document).ready(function(){

	urlStr = window.location.href;
    urlStr = urlStr.substring(urlStr.indexOf('#') + 1, urlStr.length);
    switch (urlStr) {
        case "inicio":
            init();
            break;
        case 'http://localhost/LCMG/':
            init();
            break;
        default:
            if (patt.test(urlStr)) {
                var urlId = urlStr.substring(0, urlStr.indexOf('-'));
                var urlColo = urlStr.substring(urlStr.indexOf('-') + 1, urlStr.length);
                prod(urlId, urlColo)
            } else {
                //404()
            }
    }

    window.onpopstate = function(event) {
        if (event.state) {
            $('#content-main').css('opacity', '0');
            state = event.state;
            shareid = state.shid;
            sharecolor = state.shcolor;
            setTimeout(function() {
                $('head title', window.parent.document).text(state.tab);
                $("body").css('background-color', state.background);
                $('#content-main').html(state.content);
                $('#content-main').css('opacity', '1')
            }, 730)
        }
    };

});

function init() {

    $('head title', window.parent.document).text('LCMG | Inicio');
    $("meta[name='theme-color']").attr('content', '#FFF');
    $("meta[name='msapplication-navbutton-color']").attr('content', '#FFF');
    $("meta[name='apple-mobile-web-app-capable']").attr('content', 'yes');
    $("meta[name='apple-mobile-web-app-status-bar-style']").attr('content', 'black-translucent');
    $('#content-main').css('opacity', '0');
    $(window).scrollTop(0);
    setTimeout(function() {
        $.ajax({
            type: "GET",
            url: "php/init.php",
            success: function(data) {
                
                $('#content-main').html(data);
                state = {
                    content: data,
                    background: "#FFF",
                    tab: "LCMG | Inicio"
                };
                window.history.pushState(state, null, "#inicio");
                $('#content-main').css('opacity', '1');
            }
        });
        
        
    }, 730)
}