$(document).ready(function(){
    $(".modal").modal();
    $("#contactModal").click(function(){
       $("#contactForm").modal('open'); 
    });
});