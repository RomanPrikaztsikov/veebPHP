<h1>Muusika Küsimused</h1>

<form onsubmit="return validateForm()">
    <table id="table">
        <tr>
            <td>
                Milliseid muusikuid/ansambleid sa tead?<br>
                <label><input type="checkbox" id="muusik1" value="Eminem" onchange="muusikValik()"> Eminem</label>
                <br>
                <label><input type="checkbox" id="muusik2" value="50Cent" onchange="muusikValik()"> 50Cent</label>
                <br>
                <label><input type="checkbox" id="muusik3" value="Buldozers" onchange="muusikValik()"> Buldozers</label>
                <br>
                <span id="muusikError" style="color:red"></span>
            </td>
            <td id="vastus1"></td>
        </tr>

        <tr>
            <td>
                Mida arvad muusika kuulamisest koolis?<br>
                <textarea id="tekst" oninput="arvamus()"></textarea>
                <span id="tekstError" style="color:red"></span>
            </td>
            <td id="vastus2"></td>
        </tr>

        <tr>
            <td>
                Mitu tundi päevas kuulad muusikat?<br>
                0<input type="range" id="muusikaSlider" min="0" max="24" onchange="uuendamuusikaSlider()">24
            </td>
            <td id="vastus3"></td>
        </tr>

        <tr>
            <td>
                Kas sa kuulad raadiot?<br>
                <label><input type="radio" id="jah" name="radio" value="jah" onchange="radiokuulamine()"> Jah</label>
                <label><input type="radio" id="ei" name="radio" value="ei" onchange="radiokuulamine()"> Ei</label>
                <span id="radioError" style="color:red"></span>
            </td>
            <td id="vastus4"></td>
        </tr>

        <tr>
            <td>
                Milliseid raadiojaamu oskad nimetada?
                <br>
                <input type="text" id="jaamad" oninput="raadiojaamad()">
                <span id="jaamadError" style="color:red"></span>
            </td>
            <td id="vastus5"></td>
        </tr>

        <tr>
            <td>
                Millist muusikat sa kõige rohkem kuulad?
                <br>
                <label for="hiphop">HipHop</label><input type="radio" id="hiphop" name="muusika" value="hiphop">
                <br>
                <label for="rock">Rock</label><input type="radio" id="rock" name="muusika" value="rock">
                <br>
                <label for="jazz">Jazz</label><input type="radio" id="jazz" name="muusika" value="jazz">
                <br>
                <label for="klassika">Klassika</label><input type="radio" id="klassika" name="muusika" value="klassika">
                <br>
                <label for="elektronika">Elektronika</label><input type="radio" id="elektronika" name="muusika" value="elektronika">
                <br>
                <label for="rap">Rap</label><input type="radio" id="rap" name="muusika" value="rap">
                <span id="muusikaError" style="color:red"></span>
            </td>
            <td></td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Saada">
                <input type="reset" value="Puhasta" onclick="puhasta()">
                <div id="kokkuvote"></div>
            </td>
            <td></td>
        </tr>

    </table>

</form>