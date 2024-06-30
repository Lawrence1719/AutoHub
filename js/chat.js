$(document).ready(function(){
    // JavaScript for handling chat functionalities
    $('#send_message').on('click', function(){
        var message = $('#message_input').val();
        $.ajax({
            url: 'chat_functions.php',
            method: 'POST',
            data: {message: message},
            success: function(response){
                $('#chat_box').append('<div>' + response + '</div>');
                $('#message_input').val('');
            }
        });
    });
});
