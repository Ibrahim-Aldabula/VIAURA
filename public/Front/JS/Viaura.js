/* Splash Screen */
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(() => {
        document.querySelector(".splash").style.opacity = "0";
        setTimeout(() => {
            document.querySelector(".splash").style.display = "none";
            document.querySelector("main").style.display = "block";
        }, 500); 
    }, 1000); 
});


  /****Navbar*****/
  let links = document.querySelectorAll("a.nav-link");

  links.forEach(link => {
      link.addEventListener("click", () => {
          let activeLink = document.querySelector("a.nav-link.active");
          if (activeLink) activeLink.classList.remove("active");  
          link.classList.add("active");
      });
  });

/***Animation***/
   AOS.init({
    offset: 120, 
    duration: 800, 
    easing: 'ease', 
    delay: 0, 
    once: false, 
});

/****Back top btn****/
let back_top = document.querySelector('.back-top');
window.onscroll = () => {
    console.log(window.pageYOffset);
    if (window.pageYOffset > 100) {
        back_top.classList.add('active')
    }
    else {
        back_top.classList.remove('active')
    }
}
back_top.onclick = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}



/*******footer*********/
// Footer will only load correctly when running on a local server (e.g., Live Server or deployed site) 

fetch("footer.html")
.then(response => response.text())
.then(data => {
  document.getElementById("footer").innerHTML = data;
});