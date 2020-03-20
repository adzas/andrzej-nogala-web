

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
    pictureSmall:{
        id: $('.mySmallPicture'),
    },
    navbar:{
        id: $('.navbar'),
        show: function(){
            this.id.css('opacity', 1);
        }
    },
    contentId:  $('.contentSection'),
    content: function(html){
        this.contentId.removeClass('d-none').html(html);
    },
    pushTopAll: function(){
        this.title.id.css({
            'top': '150px',
            'font-size': '32px',
        });
        this.contentId.css({
            'top': '250px',
            'opacity': '1',
        });
        this.navbar.id.css({
            'top': '190px',
            'font-size': '16px',
        });
        this.picture.id.css('opacity', 0);
        this.pictureSmall.id.css('opacity', 1);
    },
    selectNavbarLink: function(param){
        $('.navbarlinks').css('text-decoration', 'none');
        $('.navbarlinks[data-content="'+param+'"]').css('text-decoration', 'underline');
    },
};

$(function(){
    //moveTitle();
});

function moveTitle() {
    App.title.moveDown();
    App.picture.show();
    App.navbar.show();
}

function changeContent(param) {
    App.selectNavbarLink(param);
    $.ajax({
        url: 'ajax',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            param,
        },
        success: function(result) {
            App.pushTopAll();
            App.content(result);
        }
     });
}