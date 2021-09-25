var canvas=document.getElementById("canvasGame");
var Interval;
function Start(){
    clearInterval(Interval);
    Interval=setInterval(Loop,1000/60);
}   

function Loop(){

}

function Stop(){
    clearInterval(Interval);
}