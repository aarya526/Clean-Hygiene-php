$(document).ready(function () {
    $("#sidebarOpen, #sidebarClose").click(function () {
        $('.sidebar-menu').toggleClass('sidebar-open sidebar-close');
        console.log('toggle succesfull');
    });
});