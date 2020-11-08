var sidevarOpen = false;
var sidebar = document.getElementById("sidebar");
var sidebarCloseIcon = document.getElementById('sidebarIcon');

function toggleSidebar(){
    if (!sidebarOpen){
        sidebar.classList.add("sidebar_responsive");
        sidebarOpen = true;
    }
}

function toggleSidebar(){
    if (!sidebarOpen){
        sidebar.classList.add("sidebar_responsive");
        sidebarOpen = false;
    }
} 