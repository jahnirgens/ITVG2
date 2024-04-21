<div class="hoved_topp">
    <h1>Hent ut data fra NordPool strømpriser</h1>
    <h2>Hent all data i dag, den <span id="dato" class=""></span></h2>
    <p id="datatype"></p>
</div>
<div class="hoved_res">    
    <div id="all_data" class="resultat"></div>
    <div id="demo2" class=""></div>
</div>
<div class="hoved_topp">
    <h2>Vise timepriser i tabell<span id="dato" class=""></span></h2>
</div>
<div class="hoved_res">    
    <div id="pris_tabell" class="resultat"></div>
    <div id="demo2" class=""></div>
</div>

<script>
    let allData;
    let innhold;
    let myArray;
    //skriv ut datoen
    document.getElementById("dato").innerHTML = getDate(0);
    //Hent prisene
    let dDato = getDate(0);
    let jsonfile = 'https://www.hvakosterstrommen.no/api/v1/prices/'+getDate(0)+'_NO1.json';
    
    // Her henter jeg priser fra webside
    getPriser(jsonfile, 'dagensPriser');
    




    //Skriver ut tabell
    function tabell(x){
        myArray = x.slice(16,20);
        for (let i=0; i<myArray.lengt; i++){
           myArray[i] = myArray[i];  
        }
        document.getElementById("pris_tabell").innerHTML = myArray;
    }

    //Henter priser med mva og nettleie
    async function getPriser(file, dag) {
        let myPromise = new Promise(function(resolve) {
            let req = new XMLHttpRequest();
            req.open('GET', file);
            req.onload = function() {
                if (req.status == 200) {
                    resolve(req.response);
                } else {
                    resolve("File not Found");
                }
            };
            req.send();
        });
        innhold = await myPromise;
        document.getElementById("all_data").innerHTML = innhold;
        tabell(innhold);
    }
    
    //Dato
    function getDate(x) {
        let date = new Date();
        date.setHours(date.getHours());
        date.setDate(date.getDate() + x);
        let res = date.toLocaleString().slice(0,9);
        res = res.split('.');
        if ( res[0] < 10){ res[0] = '0'+res[0];}
        if ( res[1] < 10){ res[1] = '0'+res[1];}
        return res[2]+'/'+res[1]+'-'+res[0];
    }
</script> 