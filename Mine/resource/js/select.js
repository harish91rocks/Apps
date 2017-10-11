/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

!function () {
    "use strict";
    $.fn.extend({
        selectPicker: function (params) {
            var _this = this;
            function each() {
                return _this.each(function () {
                    var $el = $(this),
                            $sel = $('<div class="select-picker"></div>'),
                            $tgl = $('<button type="button" class="form-control dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button>'),
                            $lbl = $('<span class="option-lbl"/>'),
                            $menu = $('<div class="dropdown-menu" />'),
                            $form = $('<div class="search-in-select" action="javascript:void(0);" />'),
                            $search = $('<input type="text" class="form-control" placeholder="Search here..." />'),
                            $exMenu = $('<div><span class="btn"><i class="caret"/></span><div><a>Select All</a><a>Unselect All</a><hr><a>Show All</a><a>Show Selected Items</a><a>Show Unselected Items</a></div></div>'),
                            $opts = $('<div class="options" />');
                    var values = [], isM = $el.is('[multiple]');
                    createPicker();
                    createOptions($el);
                    getValues();
                    toggleOptions();
                    /*
                     * 
                     */
                    if (isM) {
                        $sel.addClass('mltple-slct-pckr');
                        $menu.click(function (e) {
                            e.stopPropagation();
                        });
                    } else {
                        $form.click(function (e) {
                            e.stopPropagation();
                        });
                        $exMenu.remove();
                    }
                    $el.focus(function(){
                        $tgl.focus();
                    });
                    $sel.on('shown.bs.dropdown', function () {
                        var $op = $opts.children('button.selected:not(:disabled)').last();
                        if ($op.length === 0)
                            $op = $opts.children('button:not(:disabled)').first();
                        $op.focus();
                        $menu.find('.no-results').remove();
                        $opts.show();
                        showAll();
                        $search.val('');
                    });
                    $menu.keydown(function (e) {
                        var $op = $opts.children('button:focus');
                        if ($op.length === 0)
                            $op = $opts.children('button:visible:not(:disabled)').first();
                        switch (e.which) {
                            case 40:
                                if ($search.is(':focus'))
                                    $opts.children('button:visible:not(:disabled)').first().focus();
                                else
                                    $op.nextAll('button:visible:not(:disabled)').first().focus();
                                break;
                            case 38:
                                $op.prevAll('button:visible:not(:disabled)').first().focus();
                                break;
                            case 9:
                                $sel.removeClass('open');
                                break;
                        }

                    });
                    $opts.children('button:not(:disabled)').on('focus click', function (e) {
                        var $b = $(this), v = $b.data('value'), i = $.inArray(v, values);
                        if (isM) {
                            if (e.type === 'click')
                                if (i === -1)
                                    values.push(v);
                                else
                                    values.splice(i, 1);
                        } else {
                            values = [];
                            values.push(v);
                        }
                        if (!isM && e.type === 'click')
                            $tgl.focus();
                        setValues();
                        toggleOptions();
                    });
                    $exMenu.find('a').click(function () {
                        switch ($(this).index()) {
                            case 0:
                                selectAll();
                                break;
                            case 1:
                                unselectAll();
                                break;
                            case 3:
                                showAll();
                                break;
                            case 4:
                                showSelectedItms();
                                break;
                            case 5:
                                showUnselectedItms();
                                break;
                        }
                    });
                    $search.on('keyup', function () {
                        var v = this.value, f = false;
                        $opts.find('button').each(function () {
                            if ($(this).text().search(new RegExp(v, "i")) === -1) {
                                $(this).hide();
                            } else {
                                $(this).show();
                                f = true;
                            }
                        });
                        $menu.find('.no-results').remove();
                        if (!f) {
                            $opts.hide();
                            $menu.append('<div class="no-results" style="padding:6px;">No results match "' + v + '"</div>');
                        } else
                            $opts.show();
                    });
                    /*
                     * 
                     */
                    function createPicker() {
                        $el.hide();
                        $sel.insertAfter($el);
                        $tgl.prependTo($sel);
                        $lbl.appendTo($tgl);
                        $menu.prependTo($sel);
                        $form.appendTo($menu);
                        $search.appendTo($form);
                        $exMenu.appendTo($form);
                        $opts.appendTo($menu);
                    }
                    function createOptions($ele) {
                        if ($ele.is('select'))
                            $opts.empty();
                        $ele.children('optgroup, option').each(function () {
                            var $o = $(this);
                            if ($o.is('option')) {
                                $('<button type="button" />')
                                        .addClass($ele.is('optgroup') ? 'in-optgroup' : '')
                                        .attr('disabled', $o.is(':disabled'))
                                        .data({key: $o.text(), value: $o.val()})
                                        .text($o.text())
                                        .appendTo($opts);
                            } else {
                                $('<label class="optgroup"/>')
                                        .text(this.label)
                                        .appendTo($opts);
                                createOptions($o);
                            }
                        });
                    }
                    function getValues() {
                        values = [];
                        if (isM)
                            $.merge(values, $el.val());
                        else
                            values.push($el.val());
                    }
                    function setValues() {
                        $el.val(values);
                        $el.trigger('change');
                    }
                    function toggleOptions() {
                        $lbl.empty();
                        $opts.children('button').each(function () {
                            if ($.inArray($(this).data('value'), values) > -1) {
                                $(this).addClass('selected');
                                $lbl.append('<span>' + $(this).data('key') + '</span>');
                            } else {
                                $(this).removeClass('selected');
                            }
                        });
                    }
                    function getValues2() {
                        values = [];
                        $opts.find('button.selected').each(function () {
                            values.push($(this).data('value'));
                        });
                        setValues();
                        toggleOptions();
                    }
                    function selectAll() {
                        $opts.find('button:visible:not(:disabled)').addClass('selected');
                        getValues2();
                    }
                    function unselectAll() {
                        $opts.find('button:visible:not(:disabled)').removeClass('selected');
                        getValues2();
                    }
                    function showAll() {
                        $opts.find('button').show(200);
                        $search.val('');
                    }
                    function showSelectedItms() {
                        $opts.find('button.selected').show(200);
                        $opts.find('button:not(.selected)').hide(200);
                        $search.val('');
                    }
                    function showUnselectedItms() {
                        $opts.find('button:not(.selected)').show(200);
                        $opts.find('button.selected').hide(200);
                        $search.val('');
                    }
                });
            }
            return each();
        }
    });
    $('select[data-toggle="slect-picker"]').selectPicker();
}(window.$);