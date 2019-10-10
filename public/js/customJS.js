
// catagorys module
$("document").ready(function() {
    document.getElementById("click").addEventListener("click", function (evt) {
      	$("#catagory").show("slow",function(){
        	putcatagory();
     	});
   });
});
function putcatagory() {
    $( "#catagory" ).load('/addcategory');
} 