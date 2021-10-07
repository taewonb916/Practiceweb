
function myFunction() {
    var menu = document.getElementById("top_menu_mq")
    if (matchMedia("(min-width: 320px) and (max-width: 480px)").matches){
        if(menu.style.display == "none") 
                menu.style.display = "block";
        else 
                menu.style.display = "none";
    }
}

var c = document.getElementsByClassName("rotate");

function click1() {
    var dropdown1 = document.getElementsByClassName("dropdown-content_mq 1");

    if(dropdown1[0].style.display == "none") {
        dropdown1[0].style.display = "block";
        c[0].style = "transform: rotate(90deg)";
    }
    else if(dropdown1[0].style.display == "block"){ 
        dropdown1[0].style.display = "none";
        c[0].style = "transform: rotate(0deg)";
    }
}

function click2() {
    var dropdown2 = document.getElementsByClassName("dropdown-content_mq 2");

    if(dropdown2[0].style.display == "none") {
        dropdown2[0].style.display = "block";
        c[1].style = "transform: rotate(90deg)";
    }
    else if(dropdown2[0].style.display == "block"){ 
        dropdown2[0].style.display = "none";
        c[1].style = "transform: rotate(0deg)";
    }
}

function click3() {
    var dropdown3 = document.getElementsByClassName("dropdown-content_mq 3");

    if(dropdown3[0].style.display == "none") {
        dropdown3[0].style.display = "block";
        c[2].style = "transform: rotate(90deg)";
    }
    else if(dropdown3[0].style.display == "block"){ 
        dropdown3[0].style.display = "none";
        c[2].style = "transform: rotate(0deg)";
    }
}

function click4() {
    var dropdown4 = document.getElementsByClassName("dropdown-content_mq 4");

    if(dropdown4[0].style.display == "none") {
        dropdown4[0].style.display = "block";
        c[3].style = "transform: rotate(90deg)";
    }
    else if(dropdown4[0].style.display == "block"){ 
        dropdown4[0].style.display = "none";
        c[3].style = "transform: rotate(0deg)";
    }
}
function click5() {
    var dropdown5 = document.getElementsByClassName("dropdown-content_mq 5");

    if(dropdown5[0].style.display == "none") {
        dropdown5[0].style.display = "block";
        c[4].style = "transform: rotate(90deg)";
    }
    else if(dropdown5[0].style.display == "block"){ 
        dropdown5[0].style.display = "none";
        c[4].style = "transform: rotate(0deg)";
    }
}