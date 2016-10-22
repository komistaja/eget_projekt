// chart 1 td background color
var td1 = document.getElementsByClassName("td1");
var i = 0;
while(i < td1.length) {
    if(td1[i].innerHTML <= 1 && td1[i].innerHTML > 0) { td1[i].style.backgroundColor = "white"; }
    if(td1[i].innerHTML > 1 && td1[i].innerHTML <= 2) { td1[i].style.backgroundColor = "#9ea31a"; }
    if(td1[i].innerHTML > 2 && td1[i].innerHTML <= 3) { td1[i].style.backgroundColor = "#1aa327"; }
    i++;
}

// function for onclick chart 2

function ainesclick(ing) {
    document.getElementById("chartcontainer").innerHTML = ''; // empty container
    
    // creates div rows for table
    var i = 0;
    while(i < js_array.length) {  // js_array specified in output.php
        var div = document.createElement("div");
        div.innerHTML = js_array[i][ing];
        div.setAttribute("onmouseover", "lineMouseOver(this)");
        div.setAttribute("onmouseout", "lineMouseOut(this)");
        document.getElementById("chartcontainer").appendChild(div);
        i++;
    }
    
    
    // chart lines node
    var chartdiv = document.getElementById("chartcontainer").getElementsByTagName("div"); 
    var i = 0;
    
    while(i < chartdiv.length) {
        chartdiv[i].style.width = chartdiv[i].innerHTML * 100 + "px";
        
        i++;
    }
    
    // changes text color to black if value 0
    var i = 0;
    while(i < chartdiv.length) {
        if(chartdiv[i].innerHTML == "0") {
            chartdiv[i].style.color = "black";
        }
        chartdiv[i].style.backgroundColor = "#305899";
        i++;
    }
        
}

//function for mouseover chartline
function lineMouseOver(line) {
    line.style.height = "30px";
    line.style.color = "white";
    line.style.backgroundColor = "#993071";
    line.style.width = line.innerHTML * 120 + "px";
    line.style.padding = "5px";
    line.style.fontSize = "medium";
}

function lineMouseOut(line) {
    line.style.height = "10px";
    line.style.backgroundColor = "#305899";
    line.style.width = line.innerHTML * 100 + "px";
    line.style.padding = "0px";
    line.style.fontSize = "8px";
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