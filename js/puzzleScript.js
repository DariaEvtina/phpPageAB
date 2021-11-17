var lopp=false;

function hiireVajutus(pilt){
    pilt.src=kellekord;
    checkWin();
}

function pildiValik(pilt){
    kellekord=pilt.src;
    document.getElementById("pilt19").src=kellekord;
}

function sisu(nr){
    var fnimi=document.getElementById("pilt" + nr).src;
    fnimi=fnimi.split("/").pop();
    return fnimi;
}

function checkWin(){
    var i;
    var score = 0;
    for (i = 1; i < 10; i++)
    {
        var piltX = document.getElementById("pilt"+i).src;
        if(document.getElementById("pilt1"+i).src == piltX)
        {
            document.getElementById("pilt"+i).removeAttribute("onclick");
            document.getElementById("pilt1"+i).removeAttribute("onclick");
            score++;
            document.getElementById("pilt1"+i).style.visibility = 'hidden';

        }
        else
        {

        }

        if(score >= 9)
        {
            alert("tubli");
        }
    }
}