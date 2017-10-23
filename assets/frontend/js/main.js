$(document).ready(function(){
    $("#carInfoModal").modal('hide')
    $("#carInfoModal").css('display','none')
    $("#bookingSuccessModal").css('display','none')
    $("#contactSuccessModal").css('display','none')
    // $('#myCarousel').carousel()
    $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
    });
    $('.car-info').on("click",function(e){
        $("#carInfoModal").show();
        e.preventDefault();
        var lang = $(this).attr('data-lang');
        $.ajax({
            url: 'cars/images/',
            type: 'POST',
            data: {id:$(this).attr('data-id'),lang:$(this).attr('data-lang')},
            dataType: 'json',
            success: function(data){

                $("#carInfoModal").find('.modal-title').html(data.info.name)
                $('#carInfoModal').find('.modal-body').html('');
                $('#carInfoModal').find('.modal-body').append('<section class="vertical-center slider"></section>')
                $.each(data.images,function(key,value){
                    $('#carInfoModal').find('.modal-body section').append('<div><img src="/assets/images/cars/'+value.name+'"></div>')
                })
                $('#carInfoModal').find('.modal-body').append(
                    '<table class="table table-responsive">' +
                        '<tbody>' +
                            '<tr>' +
                                '<td>'+data.info.car_passengers_count+'</td>' +
                                '<td>'+data.info.passengers_count+'</td>' +
                            '</tr>' +
                            '<tr>' +
                                '<td>'+data.info.car_minimum_order+'</td>' +
                                '<td>'+data.info.minimum_order+'</td>' +
                            '</tr>' +
                            '<tr>' +
                                '<td>'+data.info.car_further+'</td>' +
                                '<td>'+data.info.further+'</td>' +
                            '</tr>' +
                            '<tr>' +
                                '<td>'+data.info.car_for_mkad+'</td>' +
                                '<td>'+data.info.for_mkad+'</td>' +
                            '</tr>' +
                            '<tr>' +
                                '<td>'+data.info.car_over_200km+'</td>' +
                                '<td>'+data.info.over_200km+'</td>' +
                            '</tr>' +
                        '</tbody>' +
                    '</table>'
                )
                $(".vertical-center").slick({
                    dots: true,
                    vertical: true,
                    centerMode: true,
                });
            }
        })
        $("#carInfoModal").modal('show')
    })


    // BOOKING
    $("#ajax-book-form").validate({
        rules: {
            order_type_id: {
                required: true
            },
            location: {
                required: true,
            },
            where_to: {
                required: true,
            },
            name: {
                required: true,
            },
            phone: {
                required: true,
                number: true
            },
            email: {
                required: true,
                email: true
            },
            datetime: {
                required: true,
            },
        },
        errorPlacement: function(){
            return false;  // suppresses error message text
        }
    })

    $(".contact-form").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone_number:{
                required: true,
                number: true
            },
            message: {
                required: true
            }
        },
        errorPlacement: function(){
            return false;  // suppresses error message text
        }
    })
})