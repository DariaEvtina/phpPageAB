var vastus=document.getElementById("vastus");
var kogus=document.getElementById("kogus");
var vastus2=document.getElementById("vastus2");
var kogus2=document.getElementById("kogus2");
var kogus4=document.getElementById("kogus4");
var pilt=document.getElementById("pilt");
var pilt1=document.getElementById("pilt1");
var vastus4=document.getElementById("vastus4");

const dollar=1.16;
const sek=10.65;
const rub=84.20;
const frank=1.077;
const lar=3.64;//₾
const dong=26394.51;//₫
const rel=6.33;//R$
const florin=2.09;//Ƒ
const mi=0.000621371;
const dm=10;
const sm=100;
const mm=1000;
//korrutab
function kalkulator(val,currency){
    return(val*currency).toFixed(3);
    //toFixet(3)- ? 3 märki peale komat
}

function radioChange(event){


    if (event.target.id === "dollar"){
        vastus.innerHTML=kalkulator(kogus.value, dollar)+" $";
        pilt.src="img/dollar.png";
    }
    else if(event.target.id === "rub"){
        vastus.innerHTML=kalkulator(kogus.value, rub)+" ₽";
        pilt.src="img/rub.png";
    }
    else if(event.target.id === "kroon"){
        vastus.innerHTML=kalkulator(kogus.value, sek)+" SEK";
        pilt.src="img/kroon.png";
    }
    else if(event.target.id === "frank"){
        vastus.innerHTML=kalkulator(kogus.value, frank)+" CHF";
        pilt.src="img/sek.png";
    }
}

function validateForm() {
    let x = document.forms["var1"]["kogus"].value;
    if (x === " ") {
        alert("sissesta kogus");
        return false;
    }
}
function inputValuutaText(){
    var kogus3=document.getElementById("kogus3")
    var inputText=document.getElementById("valuutanimita").value;
    var vastus3=document.getElementById("vastus3").value;
    if (inputText==="dollar"){
        vastus3.innerHTML=kalkulator(kogus3, dollar)+" SEK";
    }
    else if(inputText==="kroon"){
        vastus3.innerHTML=kalkulator(kogus3, sek)+" $";
    }
    else if(inputText==="frank"){
        vastus3.innerHTML=kalkulator(kogus3, frank)+" CHF";
    }
    else if(inputText==="ruble"){
        vastus3.innerHTML=kalkulator(kogus3, sek)+" ₽";
    }
}
function selectChange1(event){
    if (event.target.value === "lar"){
        vastus4.innerHTML=kalkulator(kogus4.value, lar)+" ₾";
        pilt.src="img/dollar.png";
    }
    else if(event.target.value === "dong"){
        vastus4.innerHTML=kalkulator(kogus4.value, dong)+" ₫";
        pilt.src="img/rub.png";
    }
    else if(event.target.value === "rel"){
        vastus4.innerHTML=kalkulator(kogus4.value, rel)+" R$";
        pilt.src="img/kroon.png";
    }
    else if(event.target.value === "florin"){
        vastus4.innerHTML=kalkulator(kogus4.value, florin)+" Ƒ";
        pilt.src="img/sek.png";
    }
}
function selectChange(event){
    if (event.target.value === "mm"){
        vastus2.innerHTML=kalkulator(kogus2.value, mm)+" mm";
        pilt1.src="img/mm.png";
    }
    else if(event.target.value === "sm"){
        vastus2.innerHTML=kalkulator(kogus2.value, sm)+" sm";
        pilt1.src="img/sm.png";
    }
    else if(event.target.value === "dm"){
        vastus2.innerHTML=kalkulator(kogus2.value, dm)+" dm";
        pilt1.src="img/dm.png";
    }
    else if(event.target.value === "mi"){
        vastus2.innerHTML=kalkulator(kogus2.value, mi)+" mi";
        pilt1.src="img/mi.png";
    }
    else{
        vastus2.innerHTML="Sisetaja mõõtühik";
        pilt1.src="img/Nimetu.png";
    }
}