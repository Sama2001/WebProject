

window.addEventListener("load",function () {
    document.querySelector(".page-loader").classList.add("fade-out");
    setTimeout(function () {
        document.querySelector(".page-loader").style.display="none";

    },600)
    AOS.init();
});
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

const menuTabs=document.querySelector(".menu-tabs");
menuTabs.addEventListener("click",function(e){
    if(e.target.classList.contains("menu-tabs-item")&& !e.target.classList.contains("active")){
        const target=e.target.getAttribute("data-target");
        menuTabs.querySelector(".active").classList.remove("active");
        e.target.classList.add("active");
        const menuSection=document.querySelector(".menu-section");
        menuSection.querySelector(".menu-tabs-content.active").classList.remove("active");
        menuSection.querySelector(target).classList.add("active");
        AOS.init();

    }
});