$("document").ready(function() {
    document.getElementById("cookies").addEventListener("click", function (evt) {
        $("#product").show("slow",function(){
            aboutProfile();
        });
    });
});
function aboutProfile() {
    $( "product" ).load( "panal.html" );
} 