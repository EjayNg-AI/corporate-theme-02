// WhatsApp link
const whatsappButton = document.getElementById("whatsappBtn");
whatsappButton.addEventListener("click", function(event){
  window.open("https://web.whatsapp.com/", "_blank");
});

// Hamburger menu and theme toggle
const hamburger = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");
const overlay = document.querySelector(".overlay");
const body = document.body;
function closeMobileMenu(){
  mobileMenu.classList.remove("active");
  overlay.classList.remove("active");
  hamburger.setAttribute("aria-expanded","false");
  body.style.overflow="";
}
hamburger.addEventListener("click", function(){
  const isOpen = mobileMenu.classList.toggle("active");
  overlay.classList.toggle("active", isOpen);
  hamburger.setAttribute("aria-expanded", isOpen ? "true" : "false");
  body.style.overflow = isOpen ? "hidden" : "";
});
overlay.addEventListener("click", closeMobileMenu);
function isMobile(){return window.innerWidth < 700;}
document.querySelectorAll(".mobile-menu .nav-item > button.nav-link").forEach(btn=>{
  btn.addEventListener("click",e=>{if(!isMobile()) return; e.preventDefault(); const parent=btn.parentElement;const isOpen=parent.classList.toggle("open");btn.setAttribute("aria-expanded",isOpen?"true":"false");document.querySelectorAll(".mobile-menu .nav-item").forEach(item=>{if(item!==parent){item.classList.remove("open");const other=item.querySelector("button.nav-link");if(other){other.setAttribute("aria-expanded","false");}}});});
});
document.querySelectorAll('.nav .nav-link[aria-haspopup="true"]').forEach(btn=>{btn.addEventListener("click",e=>{if(window.innerWidth>=700){e.preventDefault();btn.blur();}});});
window.addEventListener("resize",()=>{if(window.innerWidth>=700){closeMobileMenu();document.querySelectorAll(".mobile-menu .nav-item.open").forEach(item=>{item.classList.remove("open");const btn=item.querySelector("button.nav-link");if(btn){btn.setAttribute("aria-expanded","false");}});}});
const themeToggle=document.querySelector(".theme-toggle");
function setTheme(dark){if(dark){body.classList.add("dark-mode");themeToggle.innerHTML="&#9788;";}else{body.classList.remove("dark-mode");themeToggle.innerHTML="&#9790;";}localStorage.setItem("theme", dark?"dark":"light");}
(function(){const savedTheme=localStorage.getItem("theme");const prefersDark=window.matchMedia&&window.matchMedia("(prefers-color-scheme: dark)").matches;if(savedTheme==="dark"){setTheme(true);}else if(savedTheme==="light"){setTheme(false);}else{prefersDark?setTheme(true):setTheme(false);}})();
themeToggle.addEventListener("click",()=>{setTheme(!body.classList.contains("dark-mode"));});
document.addEventListener("keydown",e=>{if(e.key==="Escape"&&mobileMenu.classList.contains("active")){closeMobileMenu();}});
