function toggleMenu(event) {
   
    event.stopPropagation(); 
    var sidebar = document.getElementById("sidebar");
    if (sidebar.style.transform === "translateX(0%)") {
        sidebar.style.transform = "translateX(-100%)";
        sidebar.style.top ='100px;'
    } else {
        sidebar.style.transform = "translateX(0%)";
        sidebar.style.top ='100px;'
    }
}

document.addEventListener('click', function(event) {
    
    var sidebar = document.getElementById("sidebar");
    var menuButton = document.querySelector('.menu-button');
    if (sidebar.style.transform === "translateX(0%)" && !sidebar.contains(event.target) && !menuButton.contains(event.target)) {
        sidebar.style.transform = "translateX(-100%)";
        sidebar.style.top ='100px;'
    }
});
