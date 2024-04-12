<div>
    <h1>Hent ut data fra NordPool strømpriser</h1>
    <h2>Hent all data</h2>
    <div id="demo">


    </div>
</div>
<script>
    let text = https://www.hvakosterstrommen.no/api/v1/prices/2024/04-11_NO1.json;
    const obj = JSON.parse(text);
    document.getElementById("demo").innerHTML = obj;
</script> 