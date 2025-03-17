document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM Loaded");

    // Dapatkan path URL saat ini
    const currentPath = window.location.pathname;
    console.log("Current Path:", currentPath);

    // Dapatkan semua elemen link di sidebar
    const links = document.querySelectorAll("#sidebar nav ul li a");

    // Iterasi setiap link
    links.forEach((link) => {
        const href = link.getAttribute("href");
        console.log("Href:", href);

        // Periksa apakah href sesuai dengan path saat ini
        if (currentPath === href || (currentPath === "/" && href === "/")) {
            // Tambahkan kelas untuk halaman aktif
            link.classList.add("bg-primary-50", "text-primary-700");
            console.log("Active Link Found:", href);
        }
    });
});
