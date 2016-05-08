$(document).ready(function(){
    $("#myform").on('submit', function(e){
        e.preventDefault();
        sendData();
    });
    
});


function sendData(){
    var postData = { name: $('#name').val(), email:$('#email').val(), message:$('#message').val() }
    console.log(postData);
    $.ajax({
      method: "POST",
      url: "services/contactus.php",
      data: postData
    }).done(function( msg ) {
                console.log( msg );
            });
}