$(document).ready(function(){

var count = 0;

$("#plus").click(function(){
                    count ++;
                    
                    sessionStorage.setItem("count", count);     
                    $("#count").val(sessionStorage.getItem("count"));


})

$("#minus").click(function(){
                    count --;
                    sessionStorage.setItem("count", count);     
                    
                    $("#count").val(sessionStorage.getItem("count"));

                    })

                    document.getElementById("heading").innerHTML  = sessionStorage.getItem("count");

})