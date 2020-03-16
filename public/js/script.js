
const title = {
    top: 0,
    left: 0,
    html: '',
};

function NavItem(html){
    this.name = html;
}

$(function(){

    const title = 'Andrzej Nogala';
    const navbar = [
        'O mnie',
        'Galeria',
        'Kontakt'
    ];

    $.each(navbar, (k, v) => {
        console.log($('.nav-my-link'));
        if(k == 0)
            $('.nav-my-link').first().html(v);
        else
            $('.nav-my-link').parent().next('.nav-my-link').html(v);
    })

    $('.titleSection').html(title);

    $('.nav-my-link').click(function() {
        console.log($(this).html());
        const title = $(this).html();
        $('.titleSection').html(title);
        $('.contentSection').html('O mnie');
    });
});