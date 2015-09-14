function removeelement(id) {
    return (elem=document.getElementById(id)).parentNode.removeChild(elem);
}

function setinnerhtml(ID, HTML){
    var element = document.getElementById(ID);
    element.innerHTML = HTML;
}