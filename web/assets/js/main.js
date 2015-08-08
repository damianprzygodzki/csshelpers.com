$(document).on('ready',function(){
    $("#learn-more").on('click', function(){
        scrollTo(
            $("section#csshelpers-learn")
        );
    });

    function scrollTo(target){
        var body = $("html, body");
        var targetOffset = 0;

        if(target != null) {
            var targetOffset = target.offset().top;
            console.log(targetOffset);
            body.animate({'scrollTop':targetOffset}, 700);
        }
    }
});