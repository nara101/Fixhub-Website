document.addEventListener("DOMContentLoaded", function () {
  const savedPosition = sessionStorage.getItem("scrollPosition");

  // 🧭 Jika halaman dibuka lewat link dengan hash (misalnya #team-section)
  if (window.location.hash) {
    const section = document.querySelector(window.location.hash);

    if (section) {
      section.scrollIntoView({ behavior: "smooth" });
    }

    // Setelah diarahkan ke section, HAPUS hash dari URL (tanpa reload)
    history.replaceState(null, "", window.location.pathname);

    // Hapus posisi scroll lama agar tidak bentrok
    sessionStorage.removeItem("scrollPosition");
  }
  // 📍 Jika tidak ada hash (halaman dibuka normal atau di-refresh)
  else if (savedPosition) {
    // Kembalikan posisi scroll terakhir
    window.scrollTo(0, parseInt(savedPosition));
  }

  // 📝 Simpan posisi scroll setiap kali user menggulir
  window.addEventListener("scroll", () => {
    sessionStorage.setItem("scrollPosition", window.scrollY);
  });
});
