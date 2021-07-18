const menunav = document.querySelector("#menunav");
const boutonnav = document.querySelector("#buttonnav")
console.log("hello")

boutonnav.addEventListener("click", function(){
    if(menunav.hidden){
        menunav.hidden = false;
    } else {
        menunav.hidden = true;
    }
})