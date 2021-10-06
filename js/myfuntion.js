function myFunction() {
    var menu = document.getElementById("top_menu_mq")
    if (matchMedia("(min-width: 320px) and (max-width: 480px)").matches){
        if(menu.style.display == "none") 
                menu.style.display = "block";
        else 
                menu.style.display = "none";
    }
}


function click1() {
    var dropdown1 = document.getElementsByClassName("dropdown-content_mq1");

    if(dropdown1[0].style.display == "none") 
        dropdown1[0].style.display = "block";
    else if(dropdown1[0].style.display == "block") 
        dropdown1[0].style.display = "none";
}

function click2() {
    var dropdown2 = document.getElementsByClassName("dropdown-content_mq2");

    if(dropdown2[0].style.display == "none") 
        dropdown2[0].style.display = "block";
    else if(dropdown2[0].style.display == "block") 
        dropdown2[0].style.display = "none";
}

function click3() {
    var dropdown3 = document.getElementsByClassName("dropdown-content_mq3");

    if(dropdown3[0].style.display == "none") 
        dropdown3[0].style.display = "block";
    else if(dropdown3[0].style.display == "block") 
        dropdown3[0].style.display = "none";
}

function click4() {
    var dropdown4 = document.getElementsByClassName("dropdown-content_mq4");

    if(dropdown4[0].style.display == "none") 
        dropdown4[0].style.display = "block";
    else if(dropdown4[0].style.display == "block") 
        dropdown4[0].style.display = "none";
}
function click5() {
    var dropdown5 = document.getElementsByClassName("dropdown-content_mq5");

    if(dropdown5[0].style.display == "none") 
        dropdown5[0].style.display = "block";
    else if(dropdown5[0].style.display == "block") 
        dropdown5[0].style.display = "none";
}