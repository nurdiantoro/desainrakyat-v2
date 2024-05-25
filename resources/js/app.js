// import "./bootstrap";

AOS.init();

// Button header di Index
varKelasAktif = 'bg-white drop-shadow-sm'

$('.nav-owl').on('click', function () {
    $('.nav-owl').removeClass(varKelasAktif)
    $(this).addClass(varKelasAktif)
})
// ========================================================================

// Fungsi untuk mengubah tampilan navbar saat scroll
function handleScroll() {
    const navbar = document.getElementById('navbar');
    const scrollY = window.scrollY;

    const aktif = 'shadow-md backdrop-blur-md'

    // Ganti tampilan navbar ketika user melakukan scroll
    if (scrollY > 100) {
        navbar.classList.add(...aktif.split(' '));
    } else {
        navbar.classList.remove(...aktif.split(' '));
    }
}

// Tambahkan event listener untuk mendeteksi perubahan scroll
window.addEventListener('scroll', handleScroll);

// LottieFiles===========================================================
LottieInteractivity.create({
    player:'#burgermenu',
    mode:"cursor",
    actions: [
        {
            type: "click",
            forceFlag: false
        }
    ]
});
