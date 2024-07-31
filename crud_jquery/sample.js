$(document).ready(function(){
    $("#load-hero").on('click',function(){
        $.ajax({
            url: "https://jsonplaceholder.typicode.com/posts/1",
            method: "GET",
            success: function(data){
                $("#hero-info").html('\
                <h2>${data.title}</h2>\
                <p>ID: ${data.id}</p>\
                <p>completed: ${data.completed ? "yes":"no"}</p>\
                ');
            },
            error: function(error){
                $('#hero-info').html('<p>Failed</p>');
            }
        });
    });
});