

function NavItem(html){
    this.name = html;
}

  
const App = {
    title: {
        id: $('.titleSection'),
        moveDown: function(){
            this.id.css('margin-top', '20px');
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
    category:{
        id: $('.category'),
        selectedReset: function(){
            this.id.removeClass('activ');
        },
        selectTag: function(id){
            $('.category[data-id="'+id+'"]').addClass('activ');
        }
    },
    modal:{
        id: $('.pictureModal'),
        description: $('.pictureDescription'),
        title: $('.pictureTitle'),
        show: function(id){

            const src = $('#img-' + id).attr('src');
            const title = $('#img-' + id).attr('data-title');
            const description = $('#img-' + id).attr('data-description');

            this.id.find('.img')
                .attr('src', src)
                .css('padding', '50px 10px 10px 10px');
            this.title.html(title);
            this.description.html(description);
            this.id.css('z-index', '100');
        },
        hidden: function(){
                
            this.id.find('.img')
                .attr('src', '')
                .css('padding', '500px');

            this.id.css('z-index', '-100');
        }
    },
    contentId:  $('.contentSection'),
    content: function(html){
        this.contentId.removeClass('d-none').html(html);
    },
    pushTopAll: function(){
        this.title.id.css({
            'margin-top': '0px',
        });
        this.contentId.css({
            'margin-top': '10px',
            'opacity': '1',
        });
        this.picture.id.css('padding', '20px');
    },
    selectNavbarLink: function(param){
        $('.navbarlinks').css('text-decoration', 'none');
        $('.navbarlinks[data-content="'+param+'"]').css('text-decoration', 'underline');
    },
    resetPositionContentSection: function(){
        this.contentId.css({
            'margin-top': '120px',
            'opacity': '0',
        });
    },
    selectTag: function(id){
        this.category.selectedReset();
        this.category.selectTag(id);
    }
};

$(function(){
    App.title.moveDown();
    App.picture.show();
    App.navbar.show();
    //changeContent('about');
});

function moveTitle() {
    App.title.moveDown();
    App.picture.show();
    App.navbar.show();
}

function hiddenModal() {
    App.modal.hidden();
}

function showModal(id) {
    App.modal.show(id);
}

function changeContent(param, id=null) {

    App.selectNavbarLink(param);
    App.resetPositionContentSection();

    if(param=='gallery' && id != null)
    {
        $.ajax({
            url: 'ajaxGallery',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id,
            },
            success: function(result) {
                App.pushTopAll();
                App.selectTag(id);
                App.content(result);
                
            }
         });
    }
    else
    {
        $.ajax({
            url: 'ajaxIndex',
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

    
}