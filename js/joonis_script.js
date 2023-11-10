function kustuta() {
    let k = document.getElementById("kanva").getContext("2d");
    k.clearRect(0, 0, 400, 600);
}

function print() {
    log1();
    log2();
    fireRed();
    fireRedUp();
    fireOrange();
    fireYellow();
    fireWhite();
}

function logs() {
    log1();
    log2();
}

function log1() {
    let k = document.getElementById("kanva").getContext("2d");
    k.beginPath();
    k.moveTo(35, 87);
    k.lineTo(250, 127);
    k.lineTo(240, 140);
    k.lineTo(20, 100);
    k.closePath();
    k.fillStyle = "brown";
    k.fill();
}

function log2() {
    let k = document.getElementById("kanva").getContext("2d");
    k.beginPath();
    k.moveTo(25, 117);
    k.lineTo(235, 95);
    k.lineTo(260, 110);
    k.lineTo(45, 135);
    k.closePath();
    k.fillStyle = "brown";
    k.fill();
}

function fireRed() {
    let k = document.getElementById("kanva").getContext("2d");
    k.beginPath();
    k.arc(143, 75, 40, 0, Math.PI * 2);
    k.fillStyle = "red";
    k.fill();
}

function fireOrange() {
    let k = document.getElementById("kanva").getContext("2d");
    k.beginPath();
    k.arc(143, 75, 35, 0, Math.PI * 2);
    k.fillStyle = "orange";
    k.fill();
}

function fireYellow() {
    let k = document.getElementById("kanva").getContext("2d");
    k.beginPath();
    k.arc(143, 75, 28, 0, Math.PI * 2);
    k.fillStyle = "yellow";
    k.fill();
}

function fireWhite() {
    let k = document.getElementById("kanva").getContext("2d");
    k.beginPath();
    k.arc(143, 75, 20, 0, Math.PI * 2);
    k.fillStyle = "white";
    k.fill();
}

function fireRedUp() {
    let k = document.getElementById("kanva").getContext("2d");
    k.beginPath();
    k.moveTo(103, 70);
    k.lineTo(116, 25);
    k.lineTo(133, 70);
    k.lineTo(115, 70);
    k.lineTo(140, 4);
    k.lineTo(155, 70);
    k.lineTo(145, 70);
    k.lineTo(163, 15);
    k.lineTo(183, 70);
    k.lineTo(103, 70);
    k.closePath();
    k.fillStyle = "red";
    k.fill();
}