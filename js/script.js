$(document).ready(function() {
    $('#music_content, #gaming_content, #programming_content').hide();
    $('#music_bg').on('click', function() {
        if($(this).data('shown') == "false"){
            $('#music_content').show(250);
            $(this).data('shown', "true");
        } else {
            $('#music_content').hide(250);
            $(this).data('shown', "false");
        }
    });
    $('#gaming_bg').on('click', function() {
        if($(this).data('shown') == "false"){
            $('#gaming_content').show(250);
            $(this).data('shown', "true");
        } else {
            $('#gaming_content').hide(250);
            $(this).data('shown', "false");
        }
    });
    $('#programming_bg').on('click', function() {
        if($(this).data('shown') == "false"){
            $('#programming_content').show(250);
            $(this).data('shown', "true");
        } else {
            $('#programming_content').hide(250);
            $(this).data('shown', "false");
        }
        // $('#music_content, #gaming_content').hide();
    });
});