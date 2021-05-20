var reportsArr = [];

$('#AddReport').on('click', function () {
    var reportNum = reportsArr.length + 1;
    var report =
        '<div class="text-left grid grid-cols-2 gap-6 mb-10 report">' +
        '<div class="col-span-1 font-bold self-center">Reporte ' + reportNum + '</div>' +
        '<div class="flex justify-end">' +
        '<button type="button" id="report' + reportNum + '" class="ml-2 remove-report focus:outline-none transform transition hover:scale-120">' +
        '<i class="fas fa-minus-square text-red text-2xl focus:text-red-dark col-span-1"></i>' +
        '</button>' +
        '</div>' +
        '<input type="hidden" id="report_number" name="report_number" value="' + reportNum + '">' +
        '<div>' +
        '<label for="start_period" class="block font-medium">Inicio de periodo: </label>' +
        '<input type="date" name="start_period" id="start_period" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">' +
        '</div>' +
        '<div>' +
        '<label for="end_period" class="block font-medium">Termino de periodo: </label>' +
        '<input type="date" name="end_period" id="end_period" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">' +
        '</div>' +
        '<div>' +
        '<label for="bimester_total_hours" class="block font-medium">Total horas bimestre: </label>' +
        '<input type="number" name="bimester_total_hours" id="bimester_total_hours" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">' +
        '</div>' +
        '<div>' +
        '<label for="acummulated_hours" class="block font-medium">Horas acumuladas: </label>' +
        '<input type="number" name="acummulated_hours" id="acummulated_hours" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">' +
        '</div>' +
        '<div>' +
        '<label for="report_type" class="block font-medium">Tipo de reporte: </label>' +
        '<select name="report_type" id="report_type" class="mt-1 block w-full py-2 px-3 border border-gray-light bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo focus:border-indigo sm:text-sm">' +
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

    if (accumHours < 500) {
        $.ajax({
            type: 'POST',
            url: '/addHours',
            data: {
                add_hours: addHours,
                accum_hours: accumHours
            },
            dataType: 'json',
            success: function (result) {
                var newAccumHours = parseInt(accumHours) + parseInt(addHours);
                console.log(newAccumHours);
                var perc = (newAccumHours * 100) / 500;
                console.log(newAccumHours);
                console.log(perc);
                $('.perc').html(perc);
                $('.accum_hours').html(newAccumHours);
                $('.accum_hours').val(newAccumHours);
                $('.remain_hours').html(500 - newAccumHours);
                $('#ProgressBar').css('width', perc + '%');
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

    var removeHours = $('.remove_hours').val();
    var accumHours = $('.accum_hours').val();

    if (accumHours > 0) {
        $.ajax({
            type: 'POST',
            url: '/removeHours',
            data: {
                remove_hours: removeHours,
                accum_hours: accumHours
            },
            dataType: 'json',
            success: function (result) {
                console.log(result);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
});
