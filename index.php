<html>
    <head>
<h2>PT. Once Sejahtera</h2>

    </head>
    <body>
    <table border="1">
        <tr>
            <th colspan="10">DAFTAR</th>
        </tr>
        <tr>
            <th>Kategori</th>
            <th>Abodemen</th>
            <th> Tarif Per Kwh</th>
             <th> Pajak</th>
        </tr>
        <tr>
            <td>Sosial</td>
            <td>10000</td>
            <td>300</td>
            <td>0%</td>
        </tr>
        <tr>
            <td>Rumah</td>
            <td>30000</td>
            <td>500</td>
            <td>10%</td>
        </tr>
        <tr>
            <td>Apartmen</td>
            <td>50000</td>
            <td>750</td>
            <td>15%</td>
        </tr>

                <tr>
            <td>Industri</td>
            <td>75000</td>
            <td>1000</td>
            <td>20%</td>
        </tr>

                        <tr>
            <td>Villa</td>
            <td>100000</td>
            <td>1250</td>
            <td>25%</td>
        </tr>
    </table>
</body>
</html>
    <form >
<table>
<tr>
<Label>Nama Pelanggan:</Label>
<input type="text" id="nama"><br>
</tr>
<tr>
 <label>jumlah pemakaian: </label>
 
<input type="number" id="num"><br>
<select name="kategori" id="kategori">
<option value="sosial">Sosial</option>
<option value="rumah">Rumah</option>
<option value="apartmen">Apartmen</option>
<option value="industri">Industri</option>
<option value="villa">Villa</option><br>
</table>
</form>


</select>
<button onclick="Function()">
Submit</button>
<div id="result"></div>
<script>
var arrays = [];
arrays['sosial'] = {kategori:"Sosial", abodemen:10000, tarif:300, pajak:0};
arrays['rumah'] = {kategori:"Rumah", abodemen:30000, tarif:500, pajak:0.1};
arrays['apartmen'] = {kategori:"Apartmen", abodemen:50000, tarif:750, pajak:0.15};
arrays['industri'] = {kategori:"Industri", abodemen:75000, tarif:1000, pajak:0.2};
arrays['villa'] = {kategori:"Villa", abodemen:100000, tarif:1250, pajak:0.25};

function Function() {
var nama = document.getElementById("nama").value;
var num = document.getElementById("num").value;
var kategori = document.getElementById("kategori").value;
var data = arrays[kategori];
var subtotal = (num*data.tarif)+data.abodemen
var pajak = (subtotal*data.pajak)
var bayar = subtotal+pajak
var html = "<table class='table'>";
html+="<tr>";
html+="<td>Jumlah</td>";
 html+="<td>Tarif per Kwh</td>";
html+="<td>Abodemen</td>";
html+="<td>Subtotal</td>";
html+="</tr>";

for (let i = 1; i <= num; ++i) {
html+= "<tr>";
html+= "<td>"+i+"</td>";
html+= "<td>"+data.tarif*i+"</td>";
html+= "<td>"+data.abodemen+"</td>";
 html+= "<td>"+(data.abodemen+(data.tarif*i))+"</td>";
 html+= "</tr>";
                }
html+= "<tr><td colspan='10'> subtotal: "+subtotal+"<td>";
html+= "<tr><td colspan='10'> pajak: "+pajak+"</td></tr>";
html+= "<tr><td colspan='10'> bayar: "+bayar+"</td></tr>";
html+= "</table>";

document.getElementById("result").innerHTML=html
            }

        </script>
    </body>
</html>