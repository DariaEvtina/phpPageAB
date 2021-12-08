let t;

function kingitus(){
    t=document.getElementById("tahvel1").getContext("2d");
    t.beginPath();
    t.moveTo(135,110);//x, y alguspunkt
    t.lineTo(155,110);//lÃµpppunkt
    t.lineTo(155,130);//lÃµpppunkt
    t.lineTo(135,130);
    t.fillStyle="blue";
    t.fill();
    t.beginPath();
    t.moveTo(140,110);//x, y alguspunkt
    t.lineTo(145,110);//lÃµpppunkt
    t.lineTo(145,130);//lÃµpppunkt
    t.lineTo(140,130);
    t.fillStyle="yellow";
    t.fill();
    t.beginPath();
    t.moveTo(135,120);//x, y alguspunkt
    t.lineTo(135,125);//lÃµpppunkt
    t.lineTo(155,125);//lÃµpppunkt
    t.lineTo(155,120);
    t.fillStyle="yellow";
    t.fill();
    t.beginPath();
    t.moveTo(105,110);//x, y alguspunkt
    t.lineTo(125,110);//lÃµpppunkt
    t.lineTo(125,130);//lÃµpppunkt
    t.lineTo(105,130);
    t.fillStyle="white";
    t.fill();
    t.beginPath();
    t.moveTo(110,110);//x, y alguspunkt
    t.lineTo(115,110);//lÃµpppunkt
    t.lineTo(115,130);//lÃµpppunkt
    t.lineTo(110,130);
    t.fillStyle="pink";
    t.fill();
    t.beginPath();
    t.moveTo(105,120);//x, y alguspunkt
    t.lineTo(105,125);//lÃµpppunkt
    t.lineTo(125,125);//lÃµpppunkt
    t.lineTo(125,120);
    t.fillStyle="pink";
    t.fill();

}

function jyulupuu(){
    let t = document.getElementById("tahvel1").getContext("2d");
    //joon valge vÃ¤rviga ja laiusega
    t.beginPath();
    t.moveTo(130,10);//x, y alguspunkt
    t.lineTo(149,40);//lÃµpppunkt
    t.lineTo(110,40);
    t.fillStyle="green";
    t.fill();
    t.beginPath();
    t.moveTo(125,28);//x, y alguspunkt
    t.lineTo(135,28);//lÃµpppunkt
    t.lineTo(155,60);//lÃµpppunkt
    t.lineTo(105,60);
    t.fillStyle="green";
    t.fill();
    t.beginPath();
    t.moveTo(125,48);//x, y alguspunkt
    t.lineTo(135,48);//lÃµpppunkt
    t.lineTo(165,85);//lÃµpppunkt
    t.lineTo(95,85);
    t.fillStyle="green";
    t.fill();
    t.beginPath();
    t.moveTo(125,68);//x, y alguspunkt
    t.lineTo(135,68);//lÃµpppunkt
    t.lineTo(175,110);//lÃµpppunkt
    t.lineTo(80,110);
    t.fillStyle="green";
    t.fill();
    t.beginPath();
    t.moveTo(125,110);//x, y alguspunkt
    t.lineTo(135,110);//lÃµpppunkt
    t.lineTo(135,130);//lÃµpppunkt
    t.lineTo(125,130);
    t.fillStyle="brown";
    t.fill();
    t.beginPath();
    t.moveTo(0,150);//x, y alguspunkt
    t.lineTo(400,150);//lÃµpppunkt
    t.lineTo(400,130);//lÃµpppunkt
    t.lineTo(0,130);//x, y alguspunkt
    t.fillStyle="red";
    t.fill();

}
function kustutus(){
    let t = document.getElementById("tahvel1").getContext("2d");
    t.clearRect(0,0,400,250); //x,y,laius, kÃµrgus

}

let x = 100, y = 10, r = 3;
let ysamm = 10, xsamm = 0, ykiirendus = 0.2;
let g; //tahvel, graafiline kontekst
function algus(){
    t=document.getElementById("tahvel1");
    g=t.getContext("2d");
    setInterval('liigu()', 50);
}
function joonista(){
    kustutus();
    //kingitus();
    g.fillStyle="white";
    g.beginPath()
    g.arc(x, y, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x+30, y-10, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x-30, y+10, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x+10, y+5, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x-60, y+5, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x+60, y+15, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x+70, y-10, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x-50, y-25, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x-110, y-35, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x+100, y-50, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x+100, y+5, r, 0, 2*Math.PI, true);
    g.fill();
    g.beginPath()
    g.arc(x+90, y+40, r, 0, 2*Math.PI, true);
    g.fill();

    jyulupuu();
    jyulukaunistused();

}

function liigu(){
    ysamm=ysamm+ykiirendus;
    if((x+xsamm)%2===0){
        y=y+ysamm;
        x=x+xsamm+2;
    }
    else{
        y=y+ysamm;
        x=x+xsamm-2;
    }

    joonista();
}
function hiirAlla(e){
    const tahvlikoht = t.getBoundingClientRect();
    const hx = e.clientX - tahvlikoht.left;
    const hy = e.clientY - tahvlikoht.top;
    x=hx;
    y=hy;
    ysamm=0;
}
function jyulukaunistused(){
    const t = document.getElementById("tahvel1").getContext("2d");
    t.beginPath();
    t.fillStyle="white";
    t.arc(130,25,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="pink";
    t.arc(140,40,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="yellow";
    t.arc(120,50,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="pink";
    t.arc(130,60,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="pink";
    t.arc(130,100,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="yellow";
    t.arc(150,80,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="yellow";
    t.arc(110,100,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="white";
    t.arc(110,70,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="white";
    t.arc(150,100,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
    t.beginPath();
    t.fillStyle="white";
    t.arc(130,80,5,0,2*Math.PI,true);//x, y, R arc-duga
    t.fill();
}