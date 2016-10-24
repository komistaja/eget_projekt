var arrayRev = js_array.reverse();  // reverse array values, first key represents last input
fpChart();  // calls chart function without ingredient value


// function to onclick refresh chart on frontpage
function fpChart(ingred) {
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawLineColors);
    
        

    function drawLineColors() {
        
        if(ingred == 'vehna') { var ingOut = 'Vehnä'; }
        if(ingred == 'soija') { var ingOut = 'Soijarouhe'; }
        if(ingred == 'chili') { var ingOut = 'Chili/tuliset'; }
        if(ingred == 'pavut') { var ingOut = 'Pavut ja herneet'; }
        if(ingred == 'ruis') { var ingOut = 'Ruis'; }
        
        var data = new google.visualization.DataTable();
        console.log(ingOut);
        data.addColumn('date', 'Päivä');
        data.addColumn('number', 'Vointi');
        data.addColumn('number', ingOut);
        
        function arrayRows() {   // returns array containing values for chart data rows

            var i = 1;
            var rowValues = [];
            rowValues[0] = [new Date(arrayRev[0]['date']), Number(arrayRev[0]['feel']), Number(arrayRev[0][ingred])];
            while(i < 30 && i < arrayRev.length) {
            rowValues[i] = [new Date(arrayRev[i]['date']), Number(arrayRev[i]['feel']), Number(arrayRev[i][ingred])];
            i++;
            }
        return rowValues;
        }
        
        var chartData = arrayRows();

        data.addRows(chartData);

        var options = {
            focusTarget: 'category',
            chartArea: {
            left:20,top:0,width:'100%',height:'85%'
            },
            legend: { 
            position: 'bottom' 
            },
            hAxis: {
            title: 'Päivä'
            },
            vAxis: {
            title: 'Vointi/määrä'
            },
            colors: ['#a52714', '#097138']
            };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
} // ens fpChart()