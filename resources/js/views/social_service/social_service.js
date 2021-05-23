var reportsArr = [];

$('#AddReport').on('click', function () {
    var reportNum = reportsArr.length + 1;
    var report =
        '<input type="hidden" id="reports_count" name="reports_count" value="' + (reportsArr.length + 1) + '">' +
        '<div class="text-left grid grid-cols-2 gap-6 mb-10 report">' +
        '<div class="col-span-1 font-bold self-center">Reporte ' + reportNum + '</div>' +
        '<div class="flex justify-end">' +
        '<button type="button" id="report' + reportNum + '" class="ml-2 remove-report focus:outline-none transform transition hover:scale-120 hover:text-red-light">' +
        '<i class="fas fa-minus-square text-red text-2xl col-span-1"></i>' +
        '</button>' +
        '</div>' +
        '<input type="hidden" id="report_number' + reportNum + '" name="report_number' + reportNum + '" value="' + reportNum + '">' +
        '<div>' +
        '<label for="start_period' + reportNum + '" class="block font-medium">Inicio de periodo: </label>' +
        '<input type="date" name="start_period' + reportNum + '" id="start_period' + reportNum + '" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">' +
        '</div>' +
        '<div>' +
        '<label for="end_period' + reportNum + '" class="block font-medium">Termino de periodo: </label>' +
        '<input type="date" name="end_period' + reportNum + '" id="end_period' + reportNum + '" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">' +
        '</div>' +
        '<div>' +
        '<label for="bimester_total_hours' + reportNum + '" class="block font-medium">Total horas bimestre: </label>' +
        '<input type="number" name="bimester_total_hours' + reportNum + '" id="bimester_total_hours' + reportNum + '" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">' +
        '</div>' +
        '<div>' +
        '<label for="acummulated_hours' + reportNum + '" class="block font-medium">Horas acumuladas: </label>' +
        '<input type="number" name="acummulated_hours' + reportNum + '" id="acummulated_hours' + reportNum + '" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">' +
        '</div>' +
        '<div>' +
        '<label for="report_type' + reportNum + '" class="block font-medium">Tipo de reporte: </label>' +
        '<select name="report_type' + reportNum + '" id="report_type' + reportNum + '" class="mt-1 block w-full py-2 px-3 border border-gray-light bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo focus:border-indigo sm:text-sm">' +
        '<option>Bimestral</option>' +
        '<option>Final</option>' +
        '</select>' +
        '</div>' +
        '</div>';
    reportsArr.push(report);
    $('#ReportsDiv').append(report);

    $('#report' + reportNum).on('click', function () {
        $(this).parent().parent().remove();
        reportsArr.pop();
    });
});

$('#AddHours').on('click', function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();

    var addHours = $('#addHours').val();
    var accumHours = $('#accumHours').val();
    var newAccumHours = 0;

    if (accumHours >= 500) {
        newAccumHours = 500;
    } else {
        newAccumHours = parseInt(accumHours) + parseInt(addHours);
    }

    if (accumHours <= 500) {
        $.ajax({
            type: 'POST',
            url: '/addHours',
            data: {
                accum_hours: newAccumHours
            },
            dataType: 'json',
            success: function (result) {
                if (newAccumHours < 500) {
                    setProgressBarValues('EN PROGRESO', 'indigo', newAccumHours);
                } else {
                    setProgressBarValues('FINALIZADO', 'green', newAccumHours);
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
});

$('#RemoveHours').on('click', function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();

    var removeHours = $('#removeHours').val();
    var accumHours = $('#accumHours').val();
    var newAccumHours = 0;

    if (parseInt(accumHours) > parseInt(removeHours)) {
        if (accumHours <= 0) {
            newAccumHours = 0;
        } else {
            newAccumHours = parseInt(accumHours) - parseInt(removeHours);
        }
    } else {
        if (accumHours <= 0) {
            newAccumHours = 0;
        } else {
            newAccumHours = parseInt(removeHours) - parseInt(accumHours);
        }
    }

    if (accumHours >= 0) {
        $.ajax({
            type: 'POST',
            url: '/removeHours',
            data: {
                accum_hours: newAccumHours
            },
            dataType: 'json',
            success: function (result) {
                if (newAccumHours > 0) {
                    setProgressBarValues('EN PROGRESO', 'indigo', newAccumHours);
                } else {
                    setProgressBarValues('SIN INICIAR', 'gray', newAccumHours);
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
});

function setProgressBarValues(status, statusColor, newAccumHours) {
    var perc = (newAccumHours * 100) / 500;
    $('.perc').html(perc);
    $('.accum_hours').html(newAccumHours);
    $('.accum_hours').val(newAccumHours);
    $('.remain_hours').html(500 - newAccumHours);
    $('#ProgressBar').css('width', perc + '%');
    $('#ProgressBarStatus').html(status);
    refreshProgressBar(statusColor);
}

function refreshProgressBar(statusColor) {
    $('#ProgressBarStatus').removeClass('text-' + 'indigo' + '-dark bg-' + 'indigo' + '-lightest');
    $('#TextStatusColor').removeClass('text-' + 'indigo' + '-dark');
    $('#ProgressBarBase').removeClass('bg-' + 'indigo' + '-lightest');
    $('#ProgressBar').removeClass('bg-' + 'indigo' + '-dark');

    $('#ProgressBarStatus').removeClass('text-' + 'gray' + '-dark bg-' + 'gray' + '-lightest');
    $('#TextStatusColor').removeClass('text-' + 'gray' + '-dark');
    $('#ProgressBarBase').removeClass('bg-' + 'gray' + '-lightest');
    $('#ProgressBar').removeClass('bg-' + 'gray' + '-dark');

    $('#ProgressBarStatus').removeClass('text-' + 'green' + '-dark bg-' + 'green' + '-lightest');
    $('#TextStatusColor').removeClass('text-' + 'green' + '-dark');
    $('#ProgressBarBase').removeClass('bg-' + 'green' + '-lightest');
    $('#ProgressBar').removeClass('bg-' + 'green' + '-dark');

    $('#ProgressBarStatus').addClass('text-' + statusColor + '-dark bg-' + statusColor + '-lightest');
    $('#TextStatusColor').addClass('text-' + statusColor + '-dark');
    $('#ProgressBarBase').addClass('bg-' + statusColor + '-lightest');
    $('#ProgressBar').addClass('bg-' + statusColor + '-dark');
}
