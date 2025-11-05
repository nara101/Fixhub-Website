let lastScrollTop = 0;
let timeout = null;
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function () {
  clearTimeout(timeout);
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    navbar.classList.add("navbar-hide");
  } else {
    navbar.classList.remove("navbar-hide");
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;

  // Muncul lagi setelah berhenti scroll 300ms
  timeout = setTimeout(() => {
    navbar.classList.remove("navbar-hide");
  }, 300);
});

const navLinks = document.querySelectorAll(".nav-link");

// Definisikan mapping: link -> section IDs yang dia wakili
const sectionGroups = {
  "landing-s": ["landing-s"],
  "sejarah-singkat-s": ["sejarah-singkat-s", "tim-kami-s"], // Tentang mencakup 2 section
  help: ["help", "alasan-pilih-s", "footer"],
};

const allSections = [];
for (let key in sectionGroups) {
  allSections.push(...sectionGroups[key]);
}

window.addEventListener("scroll", () => {
  let currentGroup = "home";
  let scrollY = window.pageYOffset;

  for (let group in sectionGroups) {
    const ids = sectionGroups[group];
    const firstSection = document.getElementById(ids[0]);
    const lastSection = document.getElementById(ids[ids.length - 1]);
    const start = firstSection.offsetTop - 100; // sedikit offset
    const end = lastSection.offsetTop + lastSection.offsetHeight - 200;

    if (scrollY >= start && scrollY < end) {
      currentGroup = group;
      break;
    }
  }

  // Update class active
  navLinks.forEach((link) => {
    link.classList.toggle("active", link.getAttribute("href") === "#" + currentGroup);
  });
});
