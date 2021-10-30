/**
 * cookielaw
 *
 * @category  Module
 * @author    silbersaiten <info@silbersaiten.de>
 * @support   silbersaiten <support@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @version   1.4.8
 * @link      http://www.silbersaiten.de
 * @license   See joined file licence.txt
 */

function setCookie(key, value) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (365 * 24 * 60 * 60 * 1000));
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

function getCookie(key) {
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
}

$(function ($) {
    if (getCookie('cookielawalertclosed') != '1') {
        if (typeof cookielaw_animation_type !== 'undefined' && cookielaw_animation_type) {
            $('.cookielaw-alert').slideDown(2000);
        } else {
            $('.cookielaw-alert').fadeIn(2000);
        }

        $('.cookielaw-alert-close').on('click', function (e) {
            e.preventDefault();
            if (typeof cookielaw_animation_type !== 'undefined' && cookielaw_animation_type) {
                $('.cookielaw-alert').slideUp(2000);
            } else {
                $('.cookielaw-alert').fadeOut(2000);
            }
            setCookie('cookielawalertclosed', '1');
        });
    }
});

var CookieLawAdvanced = {
    init: function () {
        // #TODO https://stackoverflow.com/questions/11376184/jquery-serializearray-key-value-pairs#answer-31751351
        $.fn.serializeObjectForm = function () {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function () {
                if (o[this.name] !== undefined) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }      
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };

        this.listeners();
    },
    listeners: function () {
        $('.cookie_law_reveal_overlay, .cookie_law_close_button').on('click', function () {
            $('.cookie_law_reveal_overlay').fadeOut(300);
            $('.cookie_law_reveal_dialog').fadeOut(300);
        });
        $(document).on('click', '.cookie_law_trigger_button', function () {
            CookieLawAdvanced.triggerGroupDescription(this);
        });
        $(document).on('click', '.cookie_law_privacy_modal', function (e) {
            e.preventDefault();
            var href = $(this).attr('href');
            $.fancybox.open(
                [{
                    autoScale: true,
                    autoSize: false,
                    width: '60%',
                    minHeight: 30,
                    height: '80%',
                    content: '<div><i class="icon-spinner icon-spin icon-large"></i></div>',
                    padding: 0,
                    margin: 0,
                    afterShow: function () {
                        $.get(
                            href,
                            function (data) {
                                if (typeof(data) !== 'undefined') {
                                    $('.fancybox-inner').html($(data).find('#content'));
                                }
                            },
                            'html'
                        );
                    },
                    helpers: {
                        overlay: {
                            locked: false,
                            closeClick: false
                        }
                    }
                }]
            );

        });

        $(document).on('click', '.cookie_law_main_selector', function () {
            $(this).parents('.cookie_law_controls').next('.cookie_law_details').find('input').prop('checked', $(this).is(':checked'));
        });

        $(document).on('click', 'button.cookie_send_confirmation', function(e){
            e.preventDefault();
            if($(this).hasClass('cookie_select_all')){
                $(this).parents('form').find('input').prop('checked', true);
            }

            var module_link = $(this).parents('form').attr('action');
            var data = $(this).parents('form').serializeObjectForm();
            data.action = 'accept';
            data.ajax = 1;

            $.post(module_link, data, function (result) {
                if (result) {
                    $('.cookie_law_reveal_overlay').fadeOut(300);
                    $('.cookie_law_reveal_dialog').fadeOut(300);
                    // location.reload();
                }
            },'json');
        });

        $(document).on('click', '#cookie_law_container_trigger', function (e) {
            e.preventDefault();
            CookieLawAdvanced.triggerOptionsContainer(this);
        });
    },
    triggerOptionsContainer: function (el) {
        var container = $('#cookie_law_categories_container');
        if (container.is(':hidden')) {
            container.slideDown();
            $(el).find('.material-icons').text('expand_less');
        } else {
            container.slideUp();
            $(el).find('.material-icons').text('expand_more');
        }
    },
    triggerGroupDescription: function (el) {
        var showing_block = $(el).parents('.cookie_law_controls').next('.cookie_law_details');
        if (showing_block.is(':hidden')) {
            $('.cookie_law_details').hide();
            showing_block.show();
        } else {
            $(el).parents('.cookie_law_controls').next('.cookie_law_details').hide();
        }
    }
};

$(document).ready(function () {
    CookieLawAdvanced.init();
});
