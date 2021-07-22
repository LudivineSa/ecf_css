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

console.log(window)
window.addEventListener('resize', function() {
    if(innerWidth >= 1080) {
    menunav.hidden = true;
    console.log("yo")
}})