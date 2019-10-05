activeKeyWords = [];
activeType = "";

document.addEventListener("DOMContentLoaded", function() {init();});

function init() {

    var typesList = document.getElementById('typesDiv');
    var xhttp = new XMLHttpRequest();
    // get all types of pathologies
    xhttp.open("GET", "webservices/getPathoTypes.php", false);
    xhttp.send();
    var array = JSON.parse(xhttp.responseText);
    for (var i = 0; i < 20; i++) {
        if (array[i] == undefined) {
            break;
        }
        var item = document.createElement('option');
        // Set contents:
        item.setAttribute("id", array[i]);
        item.value = array[i];
        item.innerHTML = array[i];
        
        typesList.appendChild(item);
    }
} 


function SearchUpdate() {
    var xhttp = new XMLHttpRequest();
    //xhttp.onreadystatechange = function() {
    //    if (this.readyState == 4 && this.status == 200) {
    //
    //   }
    //};
    value = document.getElementById("motCle").value;
    xhttp.open("GET", "webservices/getKeywordsStartingWith.php?subStr=" + value, false);
    xhttp.send();
    var array = JSON.parse(xhttp.responseText);
    console.log(array);
    // create the list of suggestions
    createSuggestionsList(array);
    createActiveKeyWordsList();
} 

function createActiveKeyWordsList() {

    var activeKeyWordsDiv = document.getElementById('activeKeyWordsDiv');

    // Delete previous list
    while (activeKeyWordsDiv.firstChild) {
        activeKeyWordsDiv.removeChild(activeKeyWordsDiv.firstChild);
    }
    var list = document.createElement('ul');
    list.setAttribute("id", "activeKeyWords");

    for (var i = 0; i < activeKeyWords.length ; i++) {
        var item = document.createElement('li');
        // Set its contents:
        item.setAttribute("position", i);
        item.appendChild(document.createTextNode(activeKeyWords[i]));
        item.addEventListener('click', 
                            function(evt){
                                setInactive(evt.target.getAttribute("position"));
                            }
                        );
        // Add it to the list:
        list.appendChild(item);
    }

    activeKeyWordsDiv.appendChild(list);
    searchPathologies();
}

function createSuggestionsList(arr) {

    var suggestionsDiv = document.getElementById('suggestionsDiv');

    // Delete previous list
    while (suggestionsDiv.firstChild) {
        suggestionsDiv.removeChild(suggestionsDiv.firstChild);
    }
    var list = document.createElement('ul');
    list.setAttribute("id", "suggestions");

    var imax = 10;

    for (var i = 0; i < imax; i++) {
        if (arr[i] == undefined) {
            break;
        }
        if (!isKeyWordActive(arr[i])) {
            // Create the list item:
            var item = document.createElement('li');
            // Set its contents:
            item.setAttribute("id", i + " - " + arr[i]);
            item.setAttribute("name", arr[i]);
            item.appendChild(document.createTextNode(arr[i]));
            item.addEventListener('click', 
                                function(evt){
                                    setActive(evt.target.getAttribute("name"));
                                }
                            );
            // Add it to the list:
            list.appendChild(item);
        } else {
            imax ++;
        }
    }
    suggestionsDiv.appendChild(list);

}


function setActive(name) {
    activeKeyWords.push(name);
    SearchUpdate();
}

function setInactive(pos) {
    activeKeyWords.splice(pos, 1);
    SearchUpdate();
}

function isKeyWordActive(name) {
    return activeKeyWords.includes(name);
}

function searchPathologies() {
    var typesList = document.getElementById('typesDiv');
    var strUser = typesList.options[typesList.selectedIndex].text;
    if (typesList.selectedIndex == 0)
        activeType = "";
    else
        activeType = strUser;
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "webservices/searchPathologies.php?activeKeyWords="+activeKeyWords+"&type="+activeType, false);
    xhttp.send();
    var array = JSON.parse(xhttp.responseText);
    console.log(array);
    createPathoList(array);
}

function createPathoList(arr) {

    if(arr == [])
        return

    var PathosDiv = document.getElementById('PathosDiv');

    // Delete previous list
    while (PathosDiv.firstChild) {
        PathosDiv.removeChild(PathosDiv.firstChild);
    }
    var list = document.createElement('ul');
    list.setAttribute("id", "PathosLisrt");

    var imax = 200;

    for (var i = 0; i < imax; i++) {
        if (arr[i] == undefined) {
            break;
        }
        // Create the list item:
        var item = document.createElement('li');
        // Set its contents:
        item.setAttribute("id", i + " patho - " + arr[i]['idp']);
        item.setAttribute("name", arr[i]['idp']);
        item.setAttribute("class", "patho");
        item.appendChild(document.createTextNode(arr[i]['mer'] + " - "));
        item.appendChild(document.createTextNode(arr[i]['type'] + " - "));
        item.appendChild(document.createTextNode(arr[i]['desc']));
        // Add it to the list:
        list.appendChild(item);
    }
    PathosDiv.appendChild(list);
}

