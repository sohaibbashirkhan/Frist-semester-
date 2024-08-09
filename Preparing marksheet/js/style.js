
function presto(){
    document.getElementById("first").classList.add("hide")
    document.getElementById("second").classList.remove("hide")
    document.getElementById("second").classList.add("newshow")

var Fname =document.getElementById("Fname").value
var Lname =document.getElementById("Lname").value
var Eng =document.getElementById("eng").value
var  Urdu=document.getElementById("urdu").value
var  Math=document.getElementById("math").value
var  Isl=document.getElementById("isl").value
var  Eco=document.getElementById("eco").value
var Eng=parseInt(Eng)
var Urdu=parseInt(Urdu)
var Math=parseInt(Math)
var Isl=parseInt(Isl)
var Eco=parseInt(Eco)
var obt= Eng + Urdu + Math + Isl + Eco
var per= obt / 500 * 100
var grade
if (per>=80) {
    grade="A+"
    
}
else if(per>=60){
grade="C"}
else if(per<=49){
    grade = "F"
}
document.getElementById("fname").innerHTML =Fname
document.getElementById("lname").innerHTML =Lname
document.getElementById("Eng").innerHTML =Eng
document.getElementById("Urdu").innerHTML =Urdu
document.getElementById("Math").innerHTML =Math
document.getElementById("Isl").innerHTML = Isl
document.getElementById("Eco").innerHTML = Eco
document.getElementById("obt").innerHTML = obt
document.getElementById("per").innerHTML = per
document.getElementById("grade").innerHTML =grade} 
