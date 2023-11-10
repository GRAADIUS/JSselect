function radioValik(){
    let answer1 = document.getElementById("vaastlus1");
    let Rokk = document.getElementById("Rokk");
    let Pop = document.getElementById("Pop");
    let Dzass = document.getElementById("Dzass");
    let Elektroon = document.getElementById("Elektroon");
    let R_ja_HH = document.getElementById("R_ja_HH");
    let Klassika = document.getElementById("Klassika");
    let muusika = null;
    if (Rokk.checked) {
        muusika = Rokk.value;
    } else if (Pop.checked) {
        muusika = Pop.value;
    } else if (Dzass.checked) {
        muusika = Dzass.value;
    } else if (Elektroon.checked) {
        muusika = Elektroon.value;
    } else if (R_ja_HH.checked) {
        muusika = R_ja_HH.value;
    } else if (Klassika.checked) {
        muusika = Klassika.value;
    } else {
        muusika = "ERROR 404";
    }
    answer1.innerHTML = "I like " + muusika + ". ";
}
function radioValikMusik(){
    let answer1 = document.getElementById("vaastlus2");
    let bad = document.getElementById("bad");
    let norm = document.getElementById("norm");
    let good = document.getElementById("good");
    let never_mind = document.getElementById("never_mind");
    let answer = null;
    if (bad.checked) {
        answer = bad.value;
    } else if (norm.checked) {
        answer = norm.value;
    } else if (good.checked) {
        answer = good.value;
    } else if (never_mind.checked) {
        answer = never_mind.value;
    } else {
        muusika = "ERROR 404";
    }
    answer1.innerHTML=answer;
}
function listeningTime(){
    let answer = document.getElementById("vaastlus3");
    let time=document.getElementById("tundi")
    answer.innerHTML="I listen to " + time.value +" hours of music a day";
}
function raadioValue(){

}