

$(function(){
    
    var appendTo = $('#sortable').sortable({
            axis: "y",
            appendTo: $('.sortable-item'),
            cancel: $('.cancelselector'),
            classes: {
                "ui-sortable-helper": 'move-sortable-item'
            },
            distance: 28,
    });


    console.log(appendTo);
})