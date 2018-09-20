;(function($) {
    "use strict";
    $(document).ready(function() {
        $('#access').on('touchstart click', '.skip-link', function(event) {
            $(this).toggleClass('focus');
            $($(this).attr('href')).toggleClass('target');
            event.preventDefault();
        }).find('.skip-link').append('<span>'+$('#menu .active').text()+'</span>');
    });
})(jQuery);
(function($){
 document.getElementById("about-div").style.display = "none"; 
  document.getElementById("info-div").style.display = "none"; 
   document.getElementById("schemes-div").style.display = "none"; 
    document.getElementById("status-div").style.display = "none"; 
    
});
function infohide()
{
 document.getElementById("info-div").style.display = "none"; 
}
function statushide()
{
 document.getElementById("status-div").style.display = "none"; 
}
function schemeshide()
{
 document.getElementById("schemes-div").style.display = "none"; 
}
function aboutushide()
{
 document.getElementById("about-div").style.display = "none"; 
}
function changehide()
{
 document.getElementById("change-div").style.display = "none"; 
}
function info() {
    var x = document.getElementById("info-div");
        x.style.display = "block";
    	statushide();
    	schemeshide();
    	aboutushide();
        changehide();
    
} 

function status() {
    var x = document.getElementById("status-div"); 
        x.style.display = "block";
    	infohide();
    	schemeshide();
    	aboutushide();
        changehide();
    
} 

function schemes() {
    var x = document.getElementById("schemes-div");
        x.style.display = "block";
    	statushide();
    	infohide();
    	aboutushide();
        changehide();
}


function aboutus() {
    var x = document.getElementById("about-div");
        x.style.display = "block";
    	statushide();
    	schemeshide();
    	infohide();
        changehide();
} 

function change()
{
    var x = document.getElementById('change-div');
    x.style.display = "block";
    statushide();
    schemeshide();
    infohide();
    aboutushide();
}
function createscheme()
{

    var x = document.getElementById('createscheme');
   
    if(x.style.display==="none")
        x.style.display = "block";
    else
         x.style.display = "none";
}