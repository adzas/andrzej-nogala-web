$(function(){
    $('.nav-my-link').click(function() {
        console.log($(this).html());
        const title = $(this).html();
        $('.titleSection').html(title);
        $('.contentSection').html('O mnie');
    });
});