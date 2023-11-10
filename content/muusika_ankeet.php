<h1>Muusika ankeet</h1>
<form name="ankeet">
    <table>
        <tr>
            <th>Millist muusika sa kuulad enam?</th>
            <td>
                <input type="radio" name="muusika" id="Rokk" value="Rokkmuusika" onclick="radioValik()">
                <label for="Rokk">Rokkmuusika</label>
                <br>
                <input type="radio" name="muusika" id="Pop" value="Popmuusika" onclick="radioValik()">
                <label for="Pop">Popmuusika</label>
                <br>
                <input type="radio" name="muusika" id="Dzass" value="Džäss" onclick="radioValik()">
                <label for="Dzass">Džäss</label>
                <br>
                <input type="radio" name="muusika" id="Elektroon" value="Elektrooniline muusika" onclick="radioValik()">
                <label for="Elektroon">Elektrooniline muusika</label>
                <br>
                <input type="radio" name="muusika" id="R_ja_HH" value="Rap ja hip-hop" onclick="radioValik()">
                <label for="R_ja_HH">Rap ja hip-hop</label>
                <br>
                <input type="radio" name="muusika" id="Klassika" value="Klassikaline muusika" onclick="radioValik()">
                <label for="Klassika">Klassikaline muusika</label>
            </td>
            <td>
                <div id="vaastlus1"></div>
            </td>
        </tr>
        <tr>
            <th>Mida sa arvad muusika kuulamisest koolis?</th>
            <td>
                <input type="radio" name="kool" id="bad" value="It's bad!" onclick="radioValikMusik()">
                <label for="bad">It's bad!</label>
                <br>
                <input type="radio" name="kool" id="norm" value="It's normal." onclick="radioValikMusik()">
                <label for="norm">It's normal.</label>
                <br>
                <input type="radio" name="kool" id="good" value="It's good!" onclick="radioValikMusik()">
                <label for="good">It's good!</label>
                <br>
                <input type="radio" name="kool" id="never_mind" value="Never mind" onclick="radioValikMusik()">
                <label for="never_mind">Never mind</label>
            </td>
            <td>
                <div id="vaastlus2"></div>
            </td>
        </tr>
        <tr>
            <th><label for="tundi">Mitu tundi päevas sa kuulad muusikat?</label></th>
            <th><input type="range" min="0" max="24" id="tundi" onchange="listeningTime()"></th>
            <td><div id="vaastlus3"></div></td>
        </tr>
        <tr>
            <th>Kas saate ka muusikat kuulata telefonist?</th>
            <td>
                <input type="radio" name="telefonist" id="telefonist_jah">
                <label for="telefonist_jah">Jah</label>
                <br>
                <input type="radio" name="telefonist" id="telefonist_ei">
                <label for="telefonist_ei">Ei</label>
            </td>
            <td></td>
        </tr>
        <tr>
            <th>Kas sa kuulad raadiot?</th>
            <td>
                <input type="radio" name="raadiot" id="raadiot_jah">
                <label for="raadiot_jah">Jah</label>
                <br>
                <input type="radio" name="raadiot" id="raadiot_ei">
                <label for="raadiot_ei">Ei</label>
            </td>
        </tr>
        <tr>
            <th><label for="raadijaame">Millised raadijaame oskate nimetada?</label></th>
            <td><input type="text" name="raadijaame" id="raadijaame" placeholder="Fm, Am, Pm, ..." ></td>
        </tr>
        <tr>
            <th><label for="emoti">Kuidas mõjutab muusika teie meeleolu ja emotsioone?</label></th>
            <td><input type="text" name="emoti" id="emoti" placeholder="Rõõm" ></td>
        </tr>
        <tr>
            <th>Kas mängite muusikat professionaalselt?</th>
            <td>
                <input type="radio" name="make_musick" id="make_jah">
                <label for="make_jah">Jah</label>
                <br>
                <input type="radio" name="make_musick" id="make_ei">
                <label for="make_ei">Ei</label>
            </td>
        </tr>
        <tr>
            <th><label for="elu">Milliseid muusikainstrumente sa mängida oskad?</label></th>
            <td>
                <select name="elukoht" id="elu">
                    <option value="">Vali...</option>
                    <option value="">Klaver</option>
                    <option value="">Viiul</option>
                    <option value="">Flööt</option>
                    <option value="">Toru</option>
                    <option value="">trummid</option>
                    <option value="">Saksofon</option>
                    <option value="">Klarnet</option>
                    <option value="">harf</option>
                    <option value="">Harmooniline</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="reset" value="clear">
    <input type="button" value="Enter">
</form>