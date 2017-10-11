(function ($) {
    $('<style></style>').appendTo('head').text('.ripple-effect{position:relative;outline-width:0!important;-webkit-transform:translateZ(0);transform:translateZ(0)}.ripple{-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-mask-image:-webkit-radial-gradient(circle,#fff 100%,#000 100%)}.rippleWave{backface-visibility:hidden;border-radius:50%;background-color:#000;transition:all 1s;-webkit-transition:all 1s;opacity:.2;transform:scale(0);-webkit-transform:scale(0)}.rippleWave.in{transform:scale(1);-webkit-transform:scale(1.2)}.rippleWave.in.out{opacity:0}');
    $.fn.rippleEffect = function () {
        $(this).on('mousedown touchstart', function (e) {
            addEffect.call(this, e);
        });
        return this;
    };
    var pow = function (v, p) {
        return Math.pow(v, p);
    };
    function addEffect(e) {
        var $e = $(this);
        if ($e.is('[disabled], .disabled') || $e.parent().hasClass('disabled') || $e.data('ripple') === false) {
            return;
        }
        if (e.timeStamp === this.timeStamp) {
            return;
        } else {
            this.timeStamp = e.timeStamp;
        }
        $e.addClass('ripple-effect');
        var initPos = $e.css('position'),
                offs = $e.offset(),
                w = $e.outerWidth(),
                h = $e.outerHeight(),
                touch = e.originalEvent.changedTouches ? e.originalEvent.changedTouches[0] : e,
                x = touch.pageX - offs.left,
                y = touch.pageY - offs.top,
                $r = $('<div/>', {
                    'class': 'ripple',
                    'css': {
                        position: 'absolute',
                        left: 0,
                        top: 0,
                        right: 0,
                        bottom: 0,
                        overflow: 'hidden',
                        borderRadius: 'inherit',
                        pointerEvents: 'none'
                    },
                    'appendTo': $e
                });
        var s = Math.min(w, h);
        var d = 1.2 * 2 * Math.max(Math.sqrt(pow((x - 0), 2) + pow((y - 0), 2)), Math.sqrt(pow((x - w), 2) + pow((y - 0), 2)), Math.sqrt(pow((x - w), 2) + pow((y - h), 2)), Math.sqrt(pow((x - 0), 2) + pow((y - h), 2)));
        if (!initPos || initPos === 'static') {
            $e.css({
                'position': 'relative'
            });
        }
        var $rw = $('<div/>', {
            'class': 'rippleWave',
            'css': {
                'position': 'absolute',
                'background': $e.data('ripple'),
                'width': s,
                'height': s,
                'left': x - (s / 2),
                'top': y - (s / 2)
            },
            'appendTo': $r
        });
        setTimeout(function () {
            var scale = 'scale(' + d / s + ')';
            $rw.addClass('in').css({'transform': scale, '-webkit-transform': scale});
        }, 10);
        $e.one('mouseup mouseleave touchend', function () {
            $rw.addClass('out');
            setTimeout(function () {
                $r.remove();
            }, parseInt($rw.css('transition-duration')) * 1000);
        });
    }
    $('[data-ripple],[data-has-ripples] a, [data-has-ripples] button').rippleEffect().addClass('ripple-effect');
    $('body').on('mousedown touchstart', '[data-ripple],[data-has-ripples] a, [data-has-ripples] button', function (e) {
        addEffect.call(this, e);
    });
})(jQuery);