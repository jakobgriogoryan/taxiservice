$(document).ready(function(){
    $('.watch-cars-images').on('click',function(){
        $.ajax({
            url: '/admin/cars/getImages',
            type: 'GET',
            data: {'id':$(this).attr('data-id')},
            dataType: 'json',
            success: function(data){
                var i = 0;
                $.each(data,function(key,value){
                    var active = '';
                    if(i == 0){
                        active = 'active';
                    }
                    $("#watchCarsImages").find('#carCarousel').children('.carousel-inner').append(
                        '<div class="item '+active+'">' +
                            '<img src="/assets/images/cars/'+value.name+'">' +
                        '</div>'
                    )
                    i++;
                })
                $("#watchCarsImages").modal('show')
            }
        })
    })

    // REMOVE IMAGE
    $('.remove-image').on('click',function(){
        if(confirm('Вы уверены ?')){
            var self = this;
            $.ajax({
                url: '/admin/cars/deleteImage',
                type: 'GET',
                data: {id:$(this).attr('data-id'),image:$(this).attr('data-image')},
                success: function(data){
                    $(self).parent().remove();
                }
            })
        }
    })


    // DELETE CAR
    $(".delete-car").on("click",function(){
        if(confirm('are you sure?')){
            var id = $(this).attr('data-id');
            var self = this;
            $.ajax({
                url: '/admin/cars/delete/' + id,
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
})