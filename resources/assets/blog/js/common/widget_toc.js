$(document).ready(function () {
    let widget = $('.widget-toc');
    if(widget.length > 0)
    {
        let btn_close = `<div class="toggle-open btn-handle"><i class="fa fa-angle-down"></i></div>`;
        widget.append(btn_close);
        let ol = $('.widget-toc ol');
        let i = $('.toggle-open i');
        let btn = $('.toggle-open');
        btn.click(function (){
            i.toggleClass('rotate-90');
            ol.toggleClass('d-hidden');
        });
    }
});