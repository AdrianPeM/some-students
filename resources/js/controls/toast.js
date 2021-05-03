window.addEventListener('DOMContentLoaded', () => {
    $('.close-toast').on('click', function () {
        hide();
    });

    setInterval(function () {
        hide();
    }, 8000);

    function hide() {
        $('.toast').addClass('hide-toast');
        setInterval(function () {
            $('.toast').remove();
        }, 150);
    }
})
