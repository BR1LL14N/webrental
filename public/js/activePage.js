document.addEventListener("DOMContentLoaded", function () {
    // Dapatkan path URL saat ini
    const currentPath = window.location.pathname;

    // Dapatkan semua elemen link di sidebar
    const links = document.querySelectorAll("#sidebar nav ul li a");

    // Iterasi setiap link
    links.forEach((link) => {
        const page = link.getAttribute("data-page");
        const href = link.getAttribute("href");

        // Periksa apakah href sesuai dengan path saat ini
        if (currentPath === href || (currentPath === "/" && href === "/")) {
            // Tambahkan kelas untuk halaman aktif
            link.classList.add("bg-primary-50", "text-primary-700");
        }
    });
});
