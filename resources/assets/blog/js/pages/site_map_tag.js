var SiteMapTag = {
    init()
    {
        this.scrollAlpha();
    },
    scrollAlpha()
    {
        var lastId,
            $menuItems = $('.alpha-list .item'),
            $scrollItems = $menuItems.map(function(){
                let item = $($(this).attr('href'));
                if (item.length) return item;
            }),
            $alphaTop = $('.alpha-top'),
            $alphaFixed = $('.alpha-fixed'),
            alphaListHeight = $alphaTop.offset().top + $alphaTop.height();
        $(window).scroll(function(){
            let fromTop = $(this).scrollTop();
            if(fromTop < alphaListHeight)
                $alphaFixed.addClass('d-hidden');
            else
                $alphaFixed.removeClass('d-hidden');
            let cur = $scrollItems.map(function(){
                if ($(this).offset().top < fromTop + 50)
                    return this;
            });
            cur = cur[cur.length-1];
            let id = cur && cur.length ? cur[0].id : "";
            if (lastId !== id) {
                lastId = id;
                $menuItems.removeClass("active");
                $(".alpha-list .item[href='#"+id+"']").addClass('active');
            }
        });
        $menuItems.on('click', function (e) {
            e.preventDefault();
            lastId = $(this).attr('href');
            lastId = lastId.replace('#', '');
            $([document.documentElement, document.body]).stop().animate({
                scrollTop: $($(this).attr('href')).offset().top - 40
            }, 200);
        });
    }
};
export default SiteMapTag;