const btn = document.getElmentById('btn');
btn.addEventListener('click', function () {
    Swal.fire({
        position: 'center',
        icon: 'success',
            title: 'Pengajuan Anda Berhasil Terkirim',
        showConfirmButton: false,
        timer: 1500
        })
    })
