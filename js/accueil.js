activeKeyWords = [];

function keyWordSearchUpdate() {
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
    keyWordSearchUpdate();
}

function setInactive(pos) {
    activeKeyWords.splice(pos, 1);
    keyWordSearchUpdate();
}

function isKeyWordActive(name) {
    return activeKeyWords.includes(name);
}