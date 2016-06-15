function showTresc(id)
{
    if (id > 1) {
        $('#content').addClass('extend');
    }
    else {
        $('#content').removeClass('extend');
    }


    $.ajax({
        type: "GET",
        url: "view/zajecia.php?id=" + id,
        dataType: 'json',
        success: function (json) {
            //wymiana treści
            $('#content').html(json['tresc']);

        }
    });
    return false;
}
