<div class="hoved_topp">
    <h1>Hent ut data fra NordPool strømpriser</h1>
    <h2>Hent all data i dag, den <span id="dato" class=""></span></h2>
    <p id="datatype"></p>
</div>
<div class="hoved_res">    
    <div id="all_data" class="resultat"></div>
</div>
<div class="hoved_topp">
    <h2>Vise timepriser i tabell<span id="dato" class=""></span></h2>
</div>
<div class="hoved_res">    
    <div id="pris_tabell" class="resultat"></div>
</div>

<script>
    //Variabler
    let allData;
    var innhold;
    let myArray;
    let dDato = getDate(0);
    let jsonfile = 'https://www.hvakosterstrommen.no/api/v1/prices/'+dDato+'_NO1.json';

    //skriv ut datoen
    document.getElementById("dato").innerHTML = dDato;

    // Her henter jeg priser fra webside
    function myDisplayer(some) {
        document.getElementById("all_data").innerHTML = some;
        tabell(some);
    }

    function tabell(x){
        myArray = x.split("{");
        //document.getElementById("pris_tabell").innerHTML = myArray[2];
 
        for(var i =1; i<= 10; i++){
            $('#pris_tabell').append('<div id="r'+ i +'" style="" class="box">A</div>')
            document.getElementById('r'+i).innerHTML = myArray[2];

        }
/*
        for (let i=1; i<myArray.length; i++){
            
            //myArray[i] = x.slice(16,20);  
            
            document.getElementById("pris_tabell").innerHTML = x[i];
        }
*/        
        
    }

    //Henter priser med mva og nettleie
    function getFile(myCallback) {
        let req = new XMLHttpRequest();
        req.onload = function() {
            if (req.status == 200) {
            myCallback(this.responseText);
            } else {
            myCallback("Error: " + req.status);
            }
        }
        req.open('GET', jsonfile);
        req.send();
    }

    getFile(myDisplayer); 

    
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