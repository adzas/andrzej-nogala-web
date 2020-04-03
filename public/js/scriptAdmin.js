

$(function(){
    
    var appendTo = $('#sortable').sortable({
            axis: "y",
            appendTo: $('.sortable-item'),
            cancel: $('.cancelselector'),
            classes: {
                "ui-sortable-helper": 'move-sortable-item'
            },
        });
        
    var sortableHorizontal = $('#sortableHorizontal').sortable({
        /* axis: "x", */
        appendTo: $('.sortable-item'),
        update: function() {
            var k = 0;
            const order = [];
            $('.sortable-item-horizontal').each(function(){
                order[k] = $(this).attr('data-id');
                k++;
            });
            /**
             * Skrypt wysyłający dane do bazy przez ajax
             */
        }
    });
})