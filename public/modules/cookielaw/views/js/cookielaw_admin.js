/**
 * cookielaw
 *
 * @author    silbersaiten <info@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @license   See joined file licence.txt
 * @category  Module
 * @support   silbersaiten <support@silbersaiten.de> *
 * @version   1.3.41
 * @link      http://www.silbersaiten.de
 *
 */

var cookielaw = {
    init: function () {
        this.initRangeSlider();
        this.listeners();

        if (typeof cookielaw_ps_version !== 'undefined' && cookielaw_ps_version === '1.7') {
            $.fn.mColorPicker.defaults.imageFolder = cookielaw_color_img_path;
        }

        this.initSortable();
        this.triggerMainSettingsHidden();
    },
    triggerMainSettingsHidden: function () {
        if (parseInt($('input[name=expanded_use]:checked').val())) {
            $('.cookielaw-alert').slideUp();
            $('form#configuration_form').slideUp();
        } else {
            $('.cookielaw-alert').slideDown();
            $('form#configuration_form').slideDown();
        }
    },
    initSortable: function(){
        $('#contained_module_container').sortable({
            group: 'shared',
            animation: 150,
            chosenClass: "sortable_chosen",
            onAdd: function (evt) {
                $(evt.item).find('input').attr('disabled', 'disabled');
                $(evt.item).find('textarea').attr('disabled', 'disabled');
            },
        });
        $('#full_list_module_container').sortable({
            group: 'shared',
            animation: 150,
            chosenClass: "sortable_chosen",
            onAdd: function (evt) {
                $(evt.item).find('input').attr('disabled', 'disabled');
                $(evt.item).find('textarea').attr('disabled', 'disabled');
            },
        });
        $('#module_group_1').sortable({
            group: 'shared',
            animation: 150,
            chosenClass: "sortable_chosen",
            onAdd: function (evt) {
                $(evt.item).find('input').removeAttr('disabled');
                $(evt.item).find('textarea').removeAttr('disabled');
                $(evt.item).find('input[type=hidden]').attr('name', 'module_group_1[]');
            },
        });
        $('#module_group_2').sortable({
            group: 'shared',
            animation: 150,
            chosenClass: "sortable_chosen",
            onAdd: function (evt) {
                $(evt.item).find('input').removeAttr('disabled');
                $(evt.item).find('textarea').removeAttr('disabled');
                $(evt.item).find('input[type=hidden]').attr('name', 'module_group_2[]');
            },
        });
        $('#module_group_3').sortable({
            group: 'shared',
            animation: 150,
            chosenClass: "sortable_chosen",
            onAdd: function (evt) {
                $(evt.item).find('input').removeAttr('disabled');
                $(evt.item).find('textarea').removeAttr('disabled');
                $(evt.item).find('input[type=hidden]').attr('name', 'module_group_3[]');
            },
        });
    },
    initRangeSlider: function () {
        $("#slider_range_opacity").slider({
            slide: function (event, ui) {
                $("#slider_range_opacity").prev().val(ui.value);
                $('.cookielaw-alert').css('opacity', ui.value / 10);
            }
        });

        $("#slider_range_font_size").slider({
            slide: function (event, ui) {
                $("#slider_range_font_size").prev().val(ui.value);
                $('.cookielaw-alert-text').css('font-size', ui.value + 'px');
            }
        });
    },
    listeners: function () {
        $(document).on('change', 'input[name=COOKIELAW_BACKGROUND_COLOR]', function (e) {
            $('.cookielaw-alert').css('background-color', e.target.value);
        });

        $(document).on('change', 'input[name=COOKIELAW_TEXT_COLOR]', function (e) {
            $('.cookielaw-alert-text').css('color', e.target.value);
        });

        $(document).on('change', 'input[name=COOKIELAW_BUTTON_BACKGROUND_COLOR]', function (e) {
            $('.cookielaw-more-information').css('background-color', e.target.value);
        });

        $(document).on('change', 'input[name=COOKIELAW_BUTTON_TEXT_COLOR]', function (e) {
            $('.cookielaw-more-information').css('color', e.target.value);
        });

        $(document).on('keyup', 'textarea[name^=COOKIELAW_TEXT]', function (e) {
            $('.cookielaw-alert-text').text(e.target.value);
        });

        $(document).on('keyup', 'input[name^=COOKIELAW_BUTTON_TEXT]:not(.color)', function (e) {
            $('.cookielaw-more-information span').text(e.target.value);
        });

        $(document).on('keyup', 'input[name^=COOKIELAW_CLOSE_BUTTON_TEXT]:not(.color)', function (e) {
            $('.cookielaw-alert-close').text(e.target.value);
        });

        $(document).on('change', 'input[name=COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR]', function (e) {
            $('a.cookielaw-alert-close').css('background-color', e.target.value);
        });

        $(document).on('change', 'input[name=COOKIELAW_CLOSE_BUTTON_TEXT_COLOR]', function (e) {
            $('a.cookielaw-alert-close').css('color', e.target.value);
        });

        /** Delete events for the alert-block in the back office */
        $('div.cookielaw-alert button.cookielaw-alert-close').removeAttr('data-dismiss');
        $(document).on('click', 'a.btn', function (e) {
            e.preventDefault();
        });

        $('input[name=expanded_use]').on('change', function(){
            cookielaw.triggerMainSettingsHidden();
        });
        $(document).on('click', '.module_name_edit', function(){
            $(this).addClass('hidden');
            $(this).siblings('span').addClass('hidden');
            $(this).siblings('.module_name_row').removeClass('hidden');
        });
        $(document).on('click', '.module_description_edit', function(){
            $(this).addClass('hidden');
            $(this).siblings('span').addClass('hidden');
            $(this).siblings('.module_description_row').removeClass('hidden');
        });
    }
};

$(document).ready(function () {
    cookielaw.init();
});
