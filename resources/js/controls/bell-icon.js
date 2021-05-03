window.addEventListener('DOMContentLoaded', () => {
    var bellIcon = $('.bell-icon');

    bellIcon.on('click', function () {
        if ($(this).find('.fa-bell').hasClass('far')) {
            $(this).find('.fa-bell').removeClass('far');
            $(this).find('.fa-bell').addClass('fas');
        } else if ($(this).find('.fa-bell').hasClass('fas')) {
            $(this).find('.fa-bell').removeClass('fas');
            $(this).find('.fa-bell').addClass('far');
        }
    });

    bellIcon.on('focusout', function () {
        if ($('.notifications').attr('style') !== 'display: none;') {
            $(this).find('.fa-bell').removeClass('fas');
            $(this).find('.fa-bell').addClass('far');
        }
    });
});

$(document).ready(function ($) {
    $('.bell-icon').on('click', function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/viewNotfs',
            data: {
                is_viewed: 1,
            },
            dataType: 'json',
            success: function (result) {
                $('.notification-count-bubble').remove();
                console.log(result);
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});
