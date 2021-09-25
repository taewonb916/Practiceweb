function myFunction() {
            var menu = document.getElementById("lefttop_menu")

        if (matchMedia("(min-width: 320px) and (max-width: 480px)").matches){
            if(menu.style.display =="none") 
                menu.style.display = "block";
            else 
                menu.style.display = "none";
        }
}