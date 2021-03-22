



$(document).ready(function() {
    $("a").click(function () {
        var id = $(this).attr('id');
        $.ajax({
            type: 'get',
            dataType: 'html',
            url: "{{ route('brand.show','id') }}",
            data: {id: id},
        }).success(function (response) {
            $("#appendproduct").html(response)
            setInterval('refreshPage()', 5000);

            error(function (error) {
                alert(error);
            });
        });
    });
    function refreshPage() {
        location.reload(true);
    }
});

$(document).ready(function() {
    $("a").click(function () {
        var id = $(this).attr('id');
        $.ajax({
            type: 'get',
            dataType: 'html',
            url: "{{ route('categorie.show','id') }}",
            data: {id: id},
        }).success(function (response) {
            $("#appendproduct").html(response)
            window.location.reload();
            error(function (error) {
                alert(error);
            });
        });
    });
});

$(".send").click(function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $.ajax({
        type: 'get',
        dataType: 'html',
        url: "{{ url('add/wishlist') }}",id: ele.attr("id"),
        data: {id: id},
        success: function (data) {
            window.location.reload();
        }

    });
}
var arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
$('.translate').text(function(i, v) {
    var chars = v.split('');
    for (var i = 0; i < chars.length; i++) {
        if (/\d/.test(chars[i])) {
            chars[i] = arabicNumbers[chars[i]];
        }
    }
    return chars.join('');
});



//
// {{--$(document).ready(function() {--}}
//     {{--$("#send").click(function () {--}}
//         {{--var search = $('#search').val();--}}
//         {{--$.ajax({--}}
//             {{--dataType: 'html',--}}
//             {{--type: 'get',--}}
//             {{--url: "{{ route('search_all') }}",--}}
//             {{--data: {search: $('#search').val()},--}}
//             {{--success: function (response) {--}}
//                 {{--window.location.reload();--}}
//                 {{--}--}}
//             {{--});--}}
// {{--});--}}
// {{--});--}}
