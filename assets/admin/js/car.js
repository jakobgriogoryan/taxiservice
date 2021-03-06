$(document).ready(function () {
    $('.watch-cars-images').on('click', function () {
        $.ajax({
            url: '/admin/cars/getImages',
            type: 'GET',
            data: {'id': $(this).attr('data-id')},
            dataType: 'json',
            success: function (data) {
                var i = 0;
                $.each(data, function (key, value) {
                    var active = '';
                    if (i == 0) {
                        active = 'active';
                    }
                    $("#watchCarsImages").find('#carCarousel').children('.carousel-inner').append(
                        '<div class="item ' + active + '">' +
                        '<img src="/assets/images/cars/' + value.name + '">' +
                        '</div>'
                    )
                    i++;
                })
                $("#watchCarsImages").modal('show')
            }
        })
    })

    // REMOVE IMAGE
    $('.remove-image').on('click', function () {
        if (confirm('Вы уверены ?')) {
            var self = this;
            $.ajax({
                url: '/admin/cars/deleteImage',
                type: 'GET',
                data: {id: $(this).attr('data-id'), image: $(this).attr('data-image')},
                success: function (data) {
                    $(self).parent().remove();
                }
            })
        }
    })


    // DELETE CAR
    $(".delete-car").on("click", function () {
        if (confirm('are you sure?')) {
            var id = $(this).attr('data-id');
            var self = this;
            $.ajax({
                url: '/admin/cars/delete/' + id,
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        $(self).closest('tr').remove()
                    }
                }
            })
        }
    })

    //  File checkbox logic
    $('.file-checkbox').on('click', function () {
        if ($(this).is(":checked")) {
            var self = this;
            var file = $(this).closest('td').prev().children('input[type="file"]').attr('id');
            if (document.getElementById(file).files.length == 0) {
                alert("Выберите картинку сначало");
                $(this).parent().removeClass('checked');
                $(this).prop("checked", false);
                return false;
            }
            $('.file-checkbox').each(function () {
                if ($(this).is(":checked")) {
                    if ($(self).attr('name') != $(this).attr('name')) {
                        $(this).parent().removeClass('checked');
                        $(this).prop("checked", false);
                    }
                }
            })
        }
    })

    $('.cars-form').on("submit", function () {
        var file_checked = false;
        var file_main_checked = false;
        var success = true;
        var car_type_checked = false;
        if ($('.car-file-table').hasClass('edit')) {
            if ($(".exist-images").children().length > 0) {
                success = false;
            }
        }
        $('.car_type_block input').each(function () {
            if ($(this).is(':checked')) {
                car_type_checked = true;
            }
        })
        if (!car_type_checked) {
            alert('Выберите тип машины');
            return false;
        }
        if (success) {
            $(".car-file-table tbody tr").each(function () {
                var file = $(this).children('.block-file').children('input[type="file"]').attr('id');
                var checkbox = $(this).children('.block-main-checkbox').find('input[type="checkbox"]');
                if (document.getElementById(file).files.length) {
                    file_checked = true;
                }
                if (checkbox.is(":checked")) {
                    file_main_checked = true;
                }
            })
            if (!file_checked) {
                alert('Выберите картинку')
                return false;
            }
            if (!file_main_checked) {
                alert('Выберите главную картинку')
                return false;
            }
        }
    })
})

function change_main_picture(self) {
    var id = $(self).attr('data-id');
    var car_id = $(self).attr('data-car-id');
    $.ajax({
        url: '/admin/cars/changeMainPicture',
        type: 'POST',
        data: {id: id, car_id: car_id},
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                $(self).remove();
                $('.exist-images div').each(function () {
                    if (id != $(this).attr('data-id')) {
                        $(this).find('span.image-button-block').html(
                            '<button type="button" class="" data-id="' + $(this).attr('data-id') + '" data-car-id="' + car_id + '" onclick="change_main_picture(this)">Сделать главным</button>'
                        )
                    }
                })
            }
        }
    })
}