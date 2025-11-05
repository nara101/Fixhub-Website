document.addEventListener("DOMContentLoaded", function () {
  const backBtn = document.getElementById("btnBack");
  if (backBtn) {
    backBtn.addEventListener("click", function () {
      // Arahkan ke halaman utama dengan anchor id Tim Section
      window.location.href = "../../index.html#tim-kami-s";
    });
  }
});
