$(document).ready(function(){
    $('#contacted').hide();
    $("#myform").on('submit', function(e){
        $('#contacted').hide();
        e.preventDefault();
        sendData();
    });
    
});


function sendData(){
    var postData = { name: $('#name').val(), email:$('#email').val(), message:$('#message').val() }
    $.ajax({
      method: "POST",
      url: "services/contactus.php",
      data: postData
    }).done(function( msg ) {
                console.log( msg );
                $('#contacted').show();
            });
    $('#name').val('');
    $('#email').val('');
    $('#message').val('');
}