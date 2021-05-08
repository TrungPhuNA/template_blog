$(document).ready(function () {
    var count = 0;
    var rate_number = parseInt($('.rating').attr('data-value'));
    var input_rate = $(".rating input[value="+rate_number+"]");
    if(input_rate.length > 0)
    {
        input_rate.closest('label').addClass('selected');
    }
    $('.rating input').change(function () {
        let radio = $(this);
        $('.rating .selected').removeClass('selected');
        radio.closest('label').addClass('selected');
        let rate = radio.attr('value');
        let rate_vote = parseInt($(".rate-vote").text());
        $.ajax({
            url: URL_RATE,
            type : "get",
            data : { rate : rate },
            dateType:"json",
            success : function (result)
            {
                $(".rate-feedback").fadeIn( 300 ).delay( 3000 ).fadeOut( 300 );
                count++;
                if(count == 3)
                {
                    $(".rating input").off();
                }
                if(count == 1)
                {
                    rate_vote++;
                }
                $(".rate-vote").html(rate_vote);
            }
        });
    });
});