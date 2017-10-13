$(".delete-message").on("click",function(){
    if(confirm('are you sure?')){
        var id = $(this).attr('data-id');
        console.log(id);
        var self = this;
        $.ajax({
            url: '/admin/contacts/delete/' + id,
            type: 'POST',
            dataType: 'json',
            success: function(data){
                if(data.success){
                    $(self).closest('tr').remove()
                }
            }
        })
    }
})