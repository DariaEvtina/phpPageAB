function kustuts(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.clearRect(0,0,400,250); //x,y,laius, kÃµrgus

}
function joonista_pea(){
    //ring1
    var t=document.getElementById("tahvel").getContext("2d");
    t.beginPath();
    t.fillStyle="white";
    t.arc(150,40,24,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
}
function joonista_kaela(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.fillStyle="white";
    t.fillRect(145,60,10,10);//x,y,laius, kÃµrgus
}
function joonista_keha(){
    var t=document.getElementById("tahvel").getContext("2d");
    //joon valge vÃ¤rviga ja laiusega
    t.beginPath();
    t.moveTo(125,70);//x, y alguspunkt
    t.lineTo(175,70);//lÃµpppunkt
    t.lineTo(165,110);
    t.lineTo(135,110);
    t.fillStyle="white";
    t.fill();
}
function joonista_jalg1(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.fillStyle="white";
    t.fillRect(135,110,10,30);//x,y,laius, kÃµrgus
    t.beginPath();
    t.moveTo(130,140);//x, y alguspunkt
    t.lineTo(150,140);//lÃµpppunkt
    t.lineTo(153,145);
    t.lineTo(127,145);
    t.fillStyle="white";
    t.fill();
    joonista_jalg2();
}
function joonista_jalg2(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.fillStyle="black";
    t.fillRect(155,110,10,30);//x,y,laius, kÃµrgus
    t.beginPath();
    t.moveTo(150,140);//x, y alguspunkt
    t.lineTo(170,140);//lÃµpppunkt
    t.lineTo(173,145);
    t.lineTo(147,145);
    t.fillStyle="black";
    t.fill();
    t.beginPath();
    t.fillStyle="black";
    t.moveTo(150,110);//x, y alguspunkt
    t.lineTo(165,110);
    t.lineTo(170,100);
    t.lineTo(160,100);
    t.fill();
    t.fill();

}

function joonista_kayed1(){
    var t=document.getElementById("tahvel").getContext("2d");
    //joon valge vÃ¤rviga ja laiusega
    t.beginPath();
    t.moveTo(125,70);//x, y alguspunkt
    t.lineTo(115,100);//lÃµpppunkt
    t.lineTo(110,105);//lÃµpppunkt
    t.lineTo(112,107);//lÃµpppunkt
    t.lineTo(115,103);//lÃµpppunkt
    t.lineTo(125,103);//lÃµpppunkt
    t.lineTo(128,107);//lÃµpppunkt
    t.lineTo(130,105);//lÃµpppunkt
    t.lineTo(125,100);//lÃµpppunkt
    t.lineTo(135,85);//lÃµpppunkt
    t.lineTo(145,85);//lÃµpppunkt
    t.lineTo(145,70);//lÃµpppunkt
    t.fillStyle="black";
    t.fill();
    joonista_kayed2();
}
function joonista_kayed2(){
    var t=document.getElementById("tahvel").getContext("2d");
    //joon valge vÃ¤rviga ja laiusega
    t.beginPath();
    t.moveTo(175,70);//x, y alguspunkt
    t.lineTo(185,100);//lÃµpppunkt
    t.lineTo(190,105);//lÃµpppunkt
    t.lineTo(188,107);//lÃµpppunkt
    t.lineTo(185,103);//lÃµpppunkt
    t.lineTo(175,103);//lÃµpppunkt
    t.lineTo(172,107);//lÃµpppunkt
    t.lineTo(168,105);//lÃµpppunkt
    t.lineTo(175,100);//lÃµpppunkt
    t.lineTo(165,75);//lÃµpppunkt
    t.fillStyle="white";
    t.fill();
}
function joonista_korva1(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.beginPath();
    t.moveTo(132,30);//x, y alguspunkt
    t.lineTo(135,5);//lÃµpppunkt
    t.lineTo(155,33);//lÃµpppunkt
    t.fillStyle="white";
    t.fill();
    joonista_korva2();
}
function joonista_korva2(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.beginPath();
    t.moveTo(170,30);//x, y alguspunkt
    t.lineTo(165,5);//lÃµpppunkt
    t.lineTo(145,33);//lÃµpppunkt
    t.fillStyle="black";
    t.fill();
}
function joonista_saba(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.fillStyle="black";
    t.beginPath();
    t.moveTo(135,110);//x, y alguspunkt
    t.lineTo(120,130);//lÃµpppunkt
    t.lineTo(90,120);//lÃµpppunkt
    t.lineTo(94,125);//lÃµpppunkt
    t.lineTo(90,128);//lÃµpppunkt
    t.lineTo(125,140);//lÃµpppunkt
    t.lineTo(135,115);//x, y alguspunkt
    t.fill();
}
function joonista_juuksed(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.beginPath();
    t.fillStyle="white";
    t.moveTo(137,60);//x, y alguspunkt
    t.lineTo(125,65);//lÃµpppunkt
    t.lineTo(125,60);
    t.lineTo(115,57);
    t.lineTo(123,52);
    t.lineTo(105,32);
    t.lineTo(134,20);
    t.fill();
    joonista_juuksed1()
}
function joonista_juuksed1(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.beginPath();
    t.fillStyle="BLACK";
    t.moveTo(164,60);//x, y alguspunkt
    t.lineTo(179,65);//lÃµpppunkt
    t.lineTo(174,57);//lÃµpppunkt
    t.lineTo(184,54);//lÃµpppunkt
    t.lineTo(174,52);//lÃµpppunkt
    t.lineTo(195,32);//lÃµpppunkt
    t.lineTo(150,15);//lÃµpppunkt
    t.lineTo(150,39);//lÃµpppunkt
    t.lineTo(155,43);//lÃµpppunkt
    t.lineTo(174,46);//lÃµpppunkt
    t.lineTo(172,53);//lÃµpppunkt
    t.fill();
}
function joonista_nagu(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.beginPath();
    t.fillStyle="black";
    t.arc(135,40,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    silm();
    t.beginPath();
    t.strokeStyle="black";
    t.moveTo(145,50);//x, y alguspunkt
    t.lineTo(150,48);//lÃµpppunkt
    t.lineTo(155,50);//lÃµpppunkt
    t.stroke();

}
function silm(){
    var t=document.getElementById("tahvel").getContext("2d");
    t.beginPath();
    t.fillStyle="gray";
    t.arc(165,40,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
}
function joonista_all(){
    joonista_saba();
    joonista_korva1();
    joonista_pea();
    joonista_kaela();
    joonista_keha();
    joonista_jalg1();
    joonista_juuksed();
    joonista_kayed1();
    joonista_nagu();
}