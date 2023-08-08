// Button header di Index
varKelasAktif = 'bg-white drop-shadow-sm'

$('.nav-owl').on('click', function () {
    $('.nav-owl').removeClass(varKelasAktif)
    $(this).addClass(varKelasAktif)
})
