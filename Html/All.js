//const searchInput = document.getElementById("search-input");
const searchButton = document.getElementById("search-button");
//const text = searchInput.value;



function bp() {
    //document.location.replace("Produtos.html");
    //searchInput.innerHTML = "awa";

    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("search-input");
    filter = input.value.toUpperCase();
    ul = document.getElementById("imgs");
    li = ul.getElementsByClassName("exemploMoletons");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h4")[0];
        console.log(a);
        txtValue = a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].parentNode.removeChild(li[i]);
        }
    }
}

//searchButton.addEventListener("click",bp());