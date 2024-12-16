// toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// ketika hamburger menu di select
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik diluar sidebar untuk hilang navabr
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// tawaran spesial
feather.replace();

const filterButtons = document.querySelectorAll(".filter-btn");
const items = document.querySelectorAll(".item");

filterButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const category = button.getAttribute("data-category");
    items.forEach((item) => {
      if (category === "semua" || item.classList.contains(category)) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  });
});

const searchOverlay = document.getElementById("searchOverlay");

const searchBar = document.querySelector(".search-bar");

// Fungsi untuk membuka dan menutup overlay
function toggleSearchOverlay() {
  if (searchOverlay.style.display === "flex") {
    searchOverlay.style.display = "none";
  } else {
    searchOverlay.style.display = "flex";
  }
}

// Event listener untuk ikon pencarian
document
  .querySelector(".search-icon")
  .addEventListener("click", toggleSearchOverlay);

// Event listener untuk menutup overlay ketika mengklik di luar kotak pencarian
document.addEventListener("click", function (e) {
  if (
    searchOverlay.style.display === "flex" &&
    !searchBar.contains(e.target) &&
    !e.target.closest(".search-icon")
  ) {
    searchOverlay.style.display = "none";
  }
});

// // Ambil elemen tombol dan panel
// const moreButton = document.getElementById('more-button');
// const morePanel = document.getElementById('more-panel');

// // Fungsi untuk menampilkan panel More
// moreButton.addEventListener('click', (e) => {
//   e.preventDefault(); // Hindari reload
//   morePanel.style.display = 'block'; // Tampilkan panel
// });

// // Fungsi untuk menyembunyikan panel More saat mengklik di luar
// document.addEventListener('click', (e) => {
//   if (!morePanel.contains(e.target) && e.target !== moreButton) {
//     morePanel.style.display = 'none'; // Sembunyikan panel
//   }
// });

// Ambil elemen-elemen penting
const moreButton = document.getElementById("more-button");
const moreContent = document.getElementById("more-content");

// Fungsi untuk menampilkan atau menyembunyikan panel "More"
moreButton.addEventListener("click", (event) => {
  event.stopPropagation(); // Mencegah klik pada tombol memicu penutupan
  moreContent.classList.toggle("active");
});

// Fungsi untuk menutup panel "More" jika klik terjadi di luar panel
document.addEventListener("click", (event) => {
  if (
    !moreContent.contains(event.target) &&
    !moreButton.contains(event.target)
  ) {
    moreContent.classList.remove("active");
  }
});

// Mencegah penutupan jika klik terjadi di dalam panel "More"
moreContent.addEventListener("click", (event) => {
  event.stopPropagation();
});

const descriptionInput = document.getElementById("deskripsi");

// Fungsi untuk menangani Enter, menambah baris baru di dalam textarea
descriptionInput.addEventListener("keydown", function (event) {
  if (event.key === "Enter" && !event.shiftKey) {
    event.preventDefault(); // Menghindari efek default Enter (menambah baris dalam textarea)

    // Menambahkan baris baru (line break) pada posisi kursor
    const currentPos = this.selectionStart;
    const value = this.value;

    // Menambahkan "\n" di posisi kursor
    this.value =
      value.substring(0, currentPos) + "\n" + value.substring(currentPos);

    // Menjaga posisi kursor berada di akhir teks
    this.selectionStart = this.selectionEnd = currentPos + 1;

    // Mengubah tinggi textarea berdasarkan jumlah baris
    this.style.height = "auto"; // Reset tinggi textarea
    this.style.height = this.scrollHeight + "px"; // Sesuaikan tinggi dengan konten
  }
});




