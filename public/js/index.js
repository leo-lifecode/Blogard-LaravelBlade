$(document).ready(() => {
    $("#container-profile").on("click", () => {
        $("#menu-profile").toggleClass("hidden");
    });

    $("#menu-btn").on("click", () => {
        $("#sidebar").css("margin-left", "0rem");
    });

    $("#close-btn").on("click", () => {
        $("#sidebar").css("margin-left", "-17rem");
    });

    const setSidebarPosition = () => {
        if (window.innerWidth > 1200) {
            $("#sidebar").css("margin-left", "0rem");
        } else {
            $("#sidebar").css("margin-left", "-17rem");
        }
    };
    setSidebarPosition();
    $(window).on("resize", setSidebarPosition);
});

$("#confirm-delete").click(function(event){
    var form = $(this).closest("form");
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "Are you sure you want to delete this!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((result) => {
        if (result.isConfirmed) {
           form.submit(); 
          }
    });
});
