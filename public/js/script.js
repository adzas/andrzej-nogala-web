

function NavItem(html){
    this.name = html;
}

  
const App = {
    title: {
        id: $('.titleSection'),
        moveDown: function(){
            const top = this.id.css('top');
            const change = parseInt(top) + parseInt((100));
            this.id.css('top', change);
            this.id.attr('onclick', 'changeContent(\'home\')');
        },
    },
    picture:{
        id: $('.myPicture'),
        show: function(){
            this.id.css('opacity', 1);
        }
    },
    navbar:{
        id: $('.navbar'),
        show: function(){
            this.id.css('opacity', 1);
        }
    }
};

$(function(){
    moveTitle();
});

function moveTitle() {
    App.title.moveDown();
    App.picture.show();
    App.navbar.show();
}

function changeContent(param) {
    $.post('ajax.php', {param}, (result) => {
        console.log(result);
    }, 'json');
}