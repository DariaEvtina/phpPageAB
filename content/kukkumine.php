function hiirAlla(e){
var tahvlikoht=t.getBoundingClientRect();
var hx=e.clientX-tahvlikoht.left;
var hy=e.clientY-tahvlikoht.top;
x=hx;
y=hy;
ysamm=0;
}
Kui nüüd nõndamoodi toimetada, siis igal hiire vajutamise korral hüppab sinna pall ja asub sealt vaikselt alla kukkuma. Kood tervikuna.
<!doctype html>
<html>
<head>
    <title>Kukkumine</title>
    <script>
        var x=20, y=20, r=10;
        var ysamm=1, ykiirendus=0.4;
        var t, g; //tahvel, graafiline kontekst
        function algus(){
            t=document.getElementById("tahvel");
            g=t.getContext("2d");
            setInterval('liigu()', 100);
        }
        function joonista(){
            g.clearRect(0, 0, t.width, t.height);
            g.strokeStyle="red";
            g.beginPath()
            g.arc(x, y, r, 0, 2*Math.PI, true);
            g.stroke()
        }
        function liigu(){
            ysamm=ysamm+ykiirendus;
            y=y+ysamm;
            joonista();
        }
        function hiirAlla(e){
            var tahvlikoht=t.getBoundingClientRect();
            var hx=e.clientX-tahvlikoht.left;
            var hy=e.clientY-tahvlikoht.top;
            x=hx;
            y=hy;
            ysamm=0;
        }
    </script>
</head>
<body onload="algus()">
<canvas id="tahvel" width="300" height="200"
        style="background-color:yellow"
        onmousedown="hiirAlla(event)"></canvas><br />
</body>
</html>
