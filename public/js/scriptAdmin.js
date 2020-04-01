

$(function(){
    
    var appendTo = $('#sortable').sortable({
            axis: "y",
            appendTo: $('.sortable-item'),
            cancel: $('.cancelselector'),
            classes: {
                "ui-sortable-helper": 'move-sortable-item'
            },
        });
        
    var sortableHirozontal = $('#sortableHorizontal').sortable({
        axis: "x",
        appendTo: $('.sortable-item'),
    })
})