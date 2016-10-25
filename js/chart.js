// chart 1 td background color
var td1 = document.getElementsByClassName("td1");
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

// function for onclick
var jsArrayReverse = js_array.reverse();
ainesclick('feel');
function ainesclick(ing, ele) {
    //set button active status
    console.log(ele);
    var th = document.getElementsByClassName("thbutton");
    var i = 0;
    while(i < th.length) {
        th[i].setAttribute("class", "thbutton btn btn-default");
        i++;
    }
    ele.setAttribute("class", "thbutton btn btn-default active")
    
    document.getElementById("chartcontainer").innerHTML = ''; // empty container
    document.getElementById("chartcontainer").style.visibility = "visible";
    
    var div = document.createElement("div");
    var arrLen = jsArrayReverse.length - 1;
    document.getElementById('chartpanelheader').innerHTML = '<h3 class="panel-title">' + ingName(ing) + 'ajalta ' + js_array[arrLen]['date'] + ' - ' + js_array[0]['date'] + '</h3>';
    
    // creates div rows for table
    var i = 0;
    while(i < js_array.length && i <= 30) {  // js_array specified in output.php
        var div = document.createElement("div");
        div.style.width = js_array[i][ing] * 100 + "px";
        div.innerHTML = '<div class="linedate">' + js_array[i]['date'] + '</div>' + '<div class="num">' + js_array[i][ing] + '</div>';
        div.setAttribute("onmouseover", "lineMouseOver(this)");
        div.setAttribute("onmouseout", "lineMouseOut(this)");
        div.setAttribute("class", "line");
        
        var inDiv = div.getElementsByTagName('div');
        inDiv[0].style.visibility = "hidden";
        inDiv[1].style.visibility = "hidden";
        
        document.getElementById("chartcontainer").appendChild(div);
        i++;
    }
    

    
    
    // chart lines node
    var chartdiv = document.getElementById("chartcontainer").getElementsByClassName("line"); 
    var i = 0;
    
  
    
    // changes text color to black if innerHTML value 0
    var i = 0;
    while(i < chartdiv.length) {
        if(chartdiv[i].innerHTML == "0") {
            chartdiv[i].style.color = "white";
        }
        i++;
    }
}

//functions for mouseover chartline
function lineMouseOver(line) {
    var lineDiv = line.getElementsByTagName("div");
    line.style.width = lineDiv[1].innerHTML * 120 + "px";
    line.setAttribute("class", "linemouseon");
    
    var inDiv = line.getElementsByTagName("div");
    inDiv[0].style.visibility = "visible";
    inDiv[1].style.visibility = "visible";
}

function lineMouseOut(line) {
    var lineDiv = line.getElementsByTagName("div");
    line.style.width = lineDiv[1].innerHTML * 100 + "px";
    line.setAttribute("class", "line");
    var inDiv = line.getElementsByTagName("div");
    inDiv[0].style.visibility = "hidden";
    inDiv[1].style.visibility = "hidden";
}


console.log(js_array);