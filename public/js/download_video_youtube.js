$(document).ready(function () {
    // press enter to input
    $('#form-get-video input[name="url"]').keyup(function (event){
        if (event.keyCode == 13) {
            $('#btn-get-video').click();
        }
    });

    // btn get video
    $('#btn-get-video').click(function (e) {
        $('#result-list-video').html("");
        $("div.spanner").addClass("show");
        $("div.overlay").addClass("show");
        $.ajax({
            url: getRoute('ajax.get_list_format_video'),
            data: {
                url: $('#form-get-video input[name="url"]').val()
            },
            success: function (data) {
                $('#result-list-video').html(data);
                $("div.spanner").removeClass("show");
                $("div.overlay").removeClass("show");
            }
        });

        // stop submit form
        e.preventDefault();
        return false;
    });
});
