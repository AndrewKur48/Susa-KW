const phone = document.getElementById('phone');
const phoneM = document.getElementById('isiProdukPhone');
const laptop = document.getElementById('laptop');
const laptopM = document.getElementById('isiProdukLaptop');

const solution = document.getElementById('solution');
const solutionM = document.getElementById('isiKomerSolution');

const what = document.getElementById('what');
const whatM = document.getElementById("whatM")
const komer= document.getElementById('commercial');
const komerM = document.getElementById('komerM');
const service = document.getElementById('service');
const produk = document.getElementById('produk');
const produkM = document.getElementById('produkMenu');



let aktifp = false;
let aktifw = false;
let aktifk = false;
produk.onclick = function(){
    if(aktifp){
        produkM.style.display="none";
        aktifp = false;
    }
    else{
        produkM.style.display="block";
        whatM.style.display="none";
        komerM.style.display="none";
        aktifp = true;
        aktifw = false;
        aktifk = false;
    }
}
what.onclick = function(){
    if(aktifw){
        whatM.style.display="none";
        aktifw = false;
    }
    else{
        whatM.style.display="block";
        produkM.style.display="none";
        komerM.style.display="none";
        aktifw = true;
        aktifp = false;
        aktifk = false;
    }
}
komer.onclick = function(){
    if(aktifk){
        komerM.style.display="none";
        aktifk = false;
    }
    else{
        komerM.style.display="block";
        produkM.style.display="none";
        whatM.style.display="none";
        aktifk = true;
        aktifp = false;
        aktifw = false;
    }
}
komerM.onmouseleave = function(){
    komerM.style.display = "none";
    aktifk = false;
}
whatM.onmouseleave = function(){
    whatM.style.display = "none";
    aktifw = false;
}
produkM.onmouseleave = function(){
    produkM.style.display = "none";
    aktifp = false;
}
phone.onmouseover = function(){
    phoneM.style.display="block";
}
phone.onmouseleave=function(){
    phoneM.style.display="none";
}
phoneM.onmouseover = function(){
    phoneM.style.display="block";
}
phoneM.onmouseleave=function(){
    phoneM.style.display="none";
}
laptop.onmouseover = function(){
    laptopM.style.display="block";
}
laptop.onmouseleave=function(){
    laptopM.style.display="none";
}
laptopM.onmouseover = function(){
    laptopM.style.display="block";
}
laptopM.onmouseleave=function(){
    laptopM.style.display="none";
}
solution.onmouseover = function(){
    solutionM.style.display="block";
}
solution.onmouseleave=function(){
    solutionM.style.display="none";
}
solutionM.onmouseover = function(){
    solutionM.style.display="block";
}
solutionM.onmouseleave=function(){
    solutionM.style.display="none";
}