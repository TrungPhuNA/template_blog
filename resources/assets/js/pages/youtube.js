let Youtube = {
    init() {
       this.showDropMenu();
    },
    showDropMenu()
    {
        $('body').on('click', '.js-show-drop-menu', function (e) {
            e.stopPropagation();
            $(this).parent().find('.drop-menu').fadeToggle(1);
        })
        .on('click', '.js-show-notify', function (e) {
            e.stopPropagation();
            $('.box-notify').fadeToggle(1);
        })
        .on('click', '.js-show-drop-account', function (e) {
            e.stopPropagation();
            $('.drop-account').fadeToggle(1);
        })
        .on('click', '.js-show-drop-item', function (e) {
            e.stopPropagation();
            let id = $(this).data('id');
            $('#'+id).show();
            $('.drop-account').hide();
        })
        .on('click', '.js-back-drop-account', function (e) {
            e.stopPropagation();
            $('.drop-menu').hide();
            $('.drop-account').show();
        })
        .on('click', function () {
            $('.drop-menu').hide();
            $('#sidebar-mb').hide();
            $('#sidebar-mb-overlay').hide();
        })
        .on('click', '.js-toggle-tab', function (e) {
            e.stopPropagation();
            let $sidebarMenu = $('#sidebar-menu');
            if($sidebarMenu.length > 0 )
            {
                if($(window).width() >= 1326)
                {
                    $sidebarMenu.toggleClass('default').toggleClass('collapse');
                    $('#main-content').toggleClass('default').toggleClass('collapse');
                }
                else {
                    $('#sidebar-mb').fadeToggle(1);
                    $('#sidebar-mb-overlay').fadeToggle(1);
                }
            }
            else {
                $('#sidebar-mb').fadeToggle(1);
                $('#sidebar-mb-overlay').fadeToggle(1);
            }
        })
        .on('mouseover', '.menu-default', function () {
            $(this).css('overflow-y', 'auto');
            $(this).css('padding-right', '0');
        })
        .on('mouseout', '.menu-default', function () {
            $(this).css('overflow-y', 'hidden');
            $(this).css('padding-right', '16px');
        })
        .on('focus', '.input-write input', function () {
            $(this).closest('.form-write').find('.button-write').show();
        })
        .on('blur', '.input-write input', function () {
            $(this).closest('.form-write').find('.button-write').hide();
        })
        .on('click', '.js-re-cmt', function () {
            $(this).closest('.list-cmt__item').find('.write-comment').css('display', 'flex');
        });
    }

};

$(function () {
    Youtube.init()
});
