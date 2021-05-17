$('.owl-carousel').owlCarousel({
    loop:true,
    margin:100,
    padding: 50,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:2,
            margin:30,
        },
        600:{
            items:2,
            margin:30,
        },
        1000:{
            items:3
        }
    }
})
//open
document.getElementById("pers").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
});
document.getElementById("persMobile").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
});

//close
document.querySelector(".popBut").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
document.querySelector(".close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});


//sign in
document.querySelector(".mem").addEventListener("click", function(){
    document.querySelector(".mem2").style.display = "block";
    document.querySelector(".mem").style.display = "none";
    document.querySelector(".memActive2").style.display = "block";
    document.querySelector(".memActive").style.display = "none";
    document.querySelector(".inputPopExtra").style.display = "block";
    document.querySelector(".inputPopExtra2").style.display = "block";
    document.querySelector(".inputPopExtra3").style.display = "block";
    document.querySelector(".mem2").style.margin = 0;
    document.querySelector(".ForgotPass").style.display = "none";
    // document.querySelector(".popup-content").style.height = 690;
});

//login
document.querySelector(".mem2").addEventListener("click", function(){
    document.querySelector(".mem").style.display = "block";
    document.querySelector(".mem2").style.display = "none";
    document.querySelector(".memActive").style.display = "block";
    document.querySelector(".memActive2").style.display = "none";
    document.querySelector(".inputPopExtra").style.display = "none";
    document.querySelector(".inputPopExtra2").style.display = "none";
    document.querySelector(".inputPopExtra3").style.display = "none";
});

document.querySelector(".prime").addEventListener("click", function(){
    alert("thank you for your purchase of the PRIME subscription");
});
document.querySelector(".normal").addEventListener("click", function(){
    alert("thank you for your purchase of the NORMAL subscription");
});