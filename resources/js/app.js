require("./bootstrap");

(function () {
    /* Navbar scroll */
    //get nav links

    const links = document.querySelectorAll(".navbar .nav-item .scrollable");
    links.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();

            const to = link.getAttribute("href");
            console.log(to);
            if (to) {
                const section = document.querySelector(to);
                const pos = section.offsetTop;
                window.scrollTo({
                    top: pos,
                    behavior: "smooth",
                });
                links.forEach((l) => l.classList.remove("active"));
                link.classList.add("active");
            }
        });
    });
})();
