 // JavaScript para toggle del menú
 const hamburger = document.querySelector(".hamburger");
 const navLinks = document.querySelector(".nav-links");

 hamburger.addEventListener("click", () => {
     navLinks.classList.toggle("active");
     hamburger.classList.toggle("active");
 });

 // Cerrar menú al hacer click en un enlace
 document.querySelectorAll(".nav-links a").forEach(n => n.addEventListener("click", () => {
     navLinks.classList.remove("active");
     hamburger.classList.remove("active");
 }));