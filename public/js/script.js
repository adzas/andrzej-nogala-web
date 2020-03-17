
const title = {
    top: 0,
    left: 0,
    html: '',
};

function NavItem(html){
    this.name = html;
}

function pullTop(element, values) {
    const top = $(element).css('top');
    const change = parseInt(top) + parseInt((values[1]));
    $(element).css(values[0], change);
}

$(function(){
    const top = $('.titleSection').css('top');
    console.log(top);
});

