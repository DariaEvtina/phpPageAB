<section>
<h1>Valluuta Kalkulaator var 1</h1>
<form name="var1" onclick="validateForm()" method="post">
    <label for="kogus">Sissetaja kogus:</label>
    <input type="number" name="kogus" id="kogus">
    euro
    <br>
    <fieldset>
        <legend>Vali Valluuta:</legend>
        <label for="dollar">dollar</label>
        <input type="radio" name="valluta1" id="dollar" value="dollar" onchange="radioChange(event)">
        <br>
        <label for="rub">ruble</label>
        <input type="radio" name="valluta1" id="rub" value="rub" onchange="radioChange(event)">
        <br>
        <label for="kroon">Rootsi kroon</label>
        <input type="radio" name="valluta1" id="kroon" value="kroon" onchange="radioChange(event)">
        <br>
        <label for="frank">Shveitsi frank</label>
        <input type="radio" name="valluta1" id="frank" value="frank" onchange="radioChange(event)">
        <div id="vastus">Siia tuleb vastus....</div>
    </fieldset>
</form>
<br>
<img src="img/Nimetu.png" alt="pilt" id="pilt">
</section>
<section>
<h1>Valluuta kalkulaator var 3</h1>
<form name="var3">
    <label for="kogus3">Sissetaja kogus:</label>
    <input type="number" name="kogus3" id="kogus3">
    <br>
    <label for="valuutanimi">Sissetaja valuuta(dollar,kroon,ruble,frank):</label>
    <input type="text" name="valuutanimi" id="valuutanimi" placeholder="valuuta nimi" >
    <input type="button" value="ok" onclick="inputValuutaText()">
    <br>
    <div id="vastus3">Siia tuleb vastus....</div>
</form>
</section>
<section>
<h1>Valluuta kalkulaator var 2</h1>
<form name="var2">
    <label for="kogus4">Sisetaja kogus: </label>
    <input type="number" name="kogus4" id="kogus4"> euro
    <label for="valluta3">Sisetaja valluuta</label>
    <select name="valluta3" id="valluta3" onchange="selectChange1(event)">
        <option value="dong">Vietnamese dong</option>
        <option value="florin">florin</option>
        <option value="lar">Gruusia lari</option>
        <option value="rel">Brasiilia reaalne</option>
    </select>
    <div id="vastus4">Siia tuleb vastus....</div>
</form>
</section>
<section>
<h1>oma kalkulator</h1>
<form name="var2" id="var2">
    <label for="kogus2">Sisetaja kogus: </label>
    <input type="number" name="kogus2" id="kogus2"> meetrit
    <label for="mootyhik">Sisetaja mõõtühik</label>
    <select name="mootyhik" id="mootyhik" onchange="selectChange(event)">
        <option value="empty">...</option>
        <option value="dm">dacemeetrit</option>
        <option value="sm">santimeetrit</option>
        <option value="mm">millimeetrid</option>
        <option value="mi">miili</option>
    </select>
    <br>
    <div id="vastus2">Siia tuleb vastus....</div>
</form>
<br>
<img src="img/Nimetu.png" alt="pilt" id="pilt1">
</section>
<a href="https://github.com/DariaEvtina/calculator">GitHub</a>