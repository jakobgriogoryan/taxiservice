$(".delete-admin").on("click",function(){
    if(confirm('are you sure?')){
        var id = $(this).attr('data-id');
        var self = this;
        $.ajax({
            url: '/admin/admins/delete/' + id,
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
