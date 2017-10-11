var $body = $('body');
function setLinkActive() {
    var path1 = location.pathname;
    $(".navbar li.active").removeClass('active');
    $(".navbar li>a").each(function () {
        var path2 = this.pathname, href = $(this).attr('href') || '';
        if ((path1 === path2 || path1.indexOf(path2) > -1) && href.indexOf('#') !== 0)
            $(this).parents('li').addClass('active');
    });
}
function onLoad() {
    setLinkActive();
    equalHeight('[data-toggle="equal-height"]');
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
    $('[data-ride="carousel"]').carousel();
}
function onResize() {
    equalHeight('[data-toggle="equal-height"]');
}
function equalHeight(ele) {
    var elemets = {}, keys = [];
    $(ele).each(function (i, e) {
        var $ele = $(this), $prevEle = $($(ele)[i - 1]);
        if (i > 0) {
            if ($ele.offset().top === $prevEle.offset().top) {
                var h1 = $ele.outerHeight(), h2 = $prevEle.outerHeight();
                if (h1 > h2) {
                    $prevEle.css('min-height', h1);
                } else if (h1 < h2) {
                    $ele.css('min-height', h2);
                }
            }
        }
        if (typeof elemets[$ele.offset().top] === 'undefined') {
            elemets[$ele.offset().top] = [];
            keys.push($ele.offset().top);
        }
        elemets[$ele.offset().top].push(this);
    });
    for (var i = 0; i < keys.length; i++) {
        var eles = elemets[keys[i]], mxHt = 0;
        $(eles).css('min-height', 'auto');
        for (var j = 0; j < eles.length; j++) {
            var ht = $(eles[j]).outerHeight();
            if (mxHt < ht) {
                mxHt = ht;
            }
            if (j === (eles.length - 1)) {
                $(eles).css('min-height', mxHt);
            }
        }
    }
}
/**/
$(function () {
    onLoad();
});
$(window).resize(function () {
    onResize();
});
$(window).on('beforeunload', function () {
    if (typeof on_before_unload !== 'undefined') {
        if (on_before_unload === false) {
            on_before_unload = true;
            return;
        }
    }
    $('#page-laoding-inprogress').remove();
    $body.append('<div id="page-laoding-inprogress"><div class="loading-bar fixed"><div class="progress-bar active bg-default" style="width:100%"></div></div></div>');
    $body.addClass('document-loading');
});
/**/
$('body').on('click', 'a[href^="mailto:"], a[href^="tel:"], a[href^="sms:"]', function () {
    on_before_unload = false;
});
/**/
/* button ripple effect on click*/
$('body').on('click', '.has-ripple-effect a, a.has-ripple-effect, button', function (e) {
    var $toggle = $(this), $ink, d, x, y;
    $toggle.css({'position': 'relative', 'overflow': 'hidden'});
    $ink = $("<span class='ripple-ink'></span>");
    $ink.prependTo($toggle);
    $ink.removeClass("animate");

    if (!$ink.height() && !$ink.width())
    {
        d = Math.max($toggle.outerWidth(), $toggle.outerHeight());
        $ink.css({height: d, width: d});
    }

    x = e.pageX - $toggle.offset().left - $ink.width() / 2;
    y = e.pageY - $toggle.offset().top - $ink.height() / 2;

    $ink.css({top: y + 'px', left: x + 'px'}).addClass("animate");
    setTimeout(function () {
        $ink.remove();
    }, parseFloat($ink.css('animation-duration')) * 1000);
});