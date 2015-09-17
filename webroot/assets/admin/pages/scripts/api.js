function removeelement(id) {
    return (elem=document.getElementById(id)).parentNode.removeChild(elem);
}

function setinnerhtml(ID, HTML){
    var element = document.getElementById(ID);
    element.innerHTML = HTML;
}

function visible(ID, Status){
    var element = selectelement(ID);
    if(Status){
        element.setAttribute("style", "");
    } else {
        element.setAttribute("style", "display: none;");
    }
}

function deleteattribute(ID, Class){
    selectelement(ID).removeAttribute(Class);
}

function inputtype(element){
    element = document.getElementById(element);
    if (element.hasAttribute("type")) {
        return element.getAttribute("type").toLowerCase().trim();
    } else {
        return elementtype(element);
    }
}

function setvalue(ID, Value){
    var type = inputtype(ID);
    switch(type) {
        case "div":
            setinnerhtml(ID, Value);
            break;
        default:
            selectelement(ID).value = Value;
    }
}

function isarray(someVar){
    return Object.prototype.toString.call( someVar ) === '[object Array]' ;
}

function clearselect(ID){
    var element = selectelement(ID);
    var i;
    for(i=element.options.length-1;i>=0;i--) {
        element.remove(i);
    }
}

function setinnerhtml(ID, Value){
    var element = selectelement(ID);
    element.innerHTML = Value;
}

function removearray(array, index){
    var newarray = new Array();
    for (var key in array) {
        var value = array[key];
        if (key != index){
            newarray[key] = value;
        }
    }
    return newarray;
}

function addoptions(ID, Values){
    visible(ID, true);
    for(i=0;i<Values.length;i++) {
        addoption(ID, Values[i]);
    }
}

function addoption(ID, Value, Text){
    var element = selectelement(ID);
    var option = document.createElement("option");
    if(Text) {option.text = Text;} else {option.text = Value;}
    option.value = Value;
    element.add(option);
}

function selectlastitem(ID){
    var element = selectelement(ID);
    if(element.options.length >0){
        element.selectedIndex = element.options.length-1;
        return true;
    }
}

function selectitem(ID, value){
    var element = selectelement(ID);
    for(var i=0; i < element.options.length; i++){
        if(element.options[i].value === value) {
            element.selectedIndex = i;
            break;
        }
    }
}

function focus(ID){
    selectelement(ID).focus();
}

function selectall(ID){
    focus(ID);
    selectelement(ID).select();
}

function selectelement(Element){
    var firstletter = Element.substring(0, 1);
    var Name = Element.substring(1, Element.length);
    switch(firstletter){
        case ".":
            return document.getElementsByClassName(Name)[0];
            break;
        default://ID
            return document.getElementById(Element);
    }
}

function setattribute(ID, Class, Value){
    var element = selectelement(ID);
    element.setAttribute(Class, Value);
}

function test(){
    alert("SUCCESS!");
}

function appendhtml(ID, HTML){
    var element = selectelement(ID);
    element.insertAdjacentHTML('beforeend', HTML);
}

function replaceAll(find, replace, str) {
    if (typeof str === 'string' || str instanceof String) {
        return str.replace(new RegExp(find, 'g'), replace);
    }
}

function isnumeric(Data){
    return !isNaN(Data);
}

function sum(Data){
    var Total = 0;
    if(isarray(Data)){
        for(i=0; i<Data.length; i++){
            if(isnumeric(Data[i])){
                Total+=Number(Data[i]);
            }
        }
    }
    return Total;
}

function formatpercent(Number){
    if(!isnumeric(Number)){Number=0;}
    Number = Number * 100;
    return Number.toFixed(2) + "%"
}