// chart 1 td background color
var td1 = document.getElementsByClassName("td1");
console.log(td1);
var i = 0;
while(i < td1.length) {
    if(td1[i].innerHTML <= 1 && td1[i].innerHTML > 0) { td1[i].style.backgroundColor = "white"; }
    if(td1[i].innerHTML > 1 && td1[i].innerHTML <= 2) { td1[i].style.backgroundColor = "#9ea31a"; }
    if(td1[i].innerHTML > 2 && td1[i].innerHTML <= 3) { td1[i].style.backgroundColor = "#1aa327"; }
    i++;
}


function ingName(input) { // returns ingredient realname from databasevalue
    if(input == 'vehna') { return 'Vehnä '; }
    if(input == 'soija') { return 'Soijarouhe '; }
    if(input == 'chili') { return 'Chili '; }
    if(input == 'pavut') { return 'Pavut '; }
    if(input == 'ruis') { return 'Ruis '; }
    if(input == 'feel') { return 'Vointi '; }
}

// function for onclick chart 2
var jsArrayReverse = js_array.reverse();
function ainesclick(ing) {
    document.getElementById("chartcontainer").innerHTML = ''; // empty container
    document.getElementById("chartcontainer").style.visibility = "visible";
    
    var div = document.createElement("div");
    
    div.innerHTML = '<h3 class="panel-title">' + ingName(ing) + 'ajalta ' + js_array[13]['date'] + ' - ' + js_array[0]['date'] + '</h3>';
    div.setAttribute("class", "panel-default");
    div.setAttribute("class", "panel-heading");
    
    document.getElementById("chartcontainer").appendChild(div);
    
    // creates div rows for table
    var i = 0;
    while(i < js_array.length && i <= 13) {  // js_array specified in output.php
        var div = document.createElement("div");
        div.innerHTML = '<div class="linedate">' + js_array[i]['date'] + '</div>' + js_array[i][ing];
        div.setAttribute("onmouseover", "lineMouseOver(this)");
        div.setAttribute("onmouseout", "lineMouseOut(this)");
        div.setAttribute("class", "line");
        div.style.width = js_array[i][ing] * 100;
        document.getElementById("chartcontainer").appendChild(div);
        i++;
    }
    
    
    // chart lines node
    var chartdiv = document.getElementById("chartcontainer").getElementsByClassName("line"); 
    var i = 0;
    
   /* while(i < chartdiv.length) {
        chartdiv[i].style.width = chartdiv[i].innerHTML * 100 + "px";
        
        i++;
    } */
    
    // changes text color to black if innerHTML value 0
    var i = 0;
    while(i < chartdiv.length) {
        if(chartdiv[i].innerHTML == "0") {
            chartdiv[i].style.color = "white";
        }
        chartdiv[i].style.backgroundColor = "#305899";
        i++;
    }
        
}

//functions for mouseover chartline
function lineMouseOver(line) {
    line.style.width = line.innerHTML * 120 + "px";
    line.setAttribute("class", "linemouseon");
}

function lineMouseOut(line) {
    line.style.width = line.innerHTML * 100 + "px";
    line.setAttribute("class", "line");
//    line.style.height = "20px";
//    line.style.backgroundColor = "#305899";

//    line.style.padding = "0px";
//    line.style.fontSize = "8px";
}

// create divs for chart values
/*
var i = 0;
var chartdata = document.getElementsByClassName("td1");
while(i < chartdata.length) {
    var div = document.createElement("div");
    div.innerHTML = td1[i].innerHTML;
    document.getElementById("chartcontainer").appendChild(div);
    i++;
}

// set width of chartlines
var x = document.getElementById("chartcontainer").getElementsByTagName("div");
var i = 0;
while (i < x.length) {
    x[i].style.width = x[i].innerHTML * 100 + "px";
    x[i].style.backgroundColor = "blue";
    i++;
}
*/
console.log(js_array);