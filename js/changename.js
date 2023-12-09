// Ketika input file berubah (saat file dipilih)
$('#profileImage').change(function() {
    var fileName = $(this).val().split('\\').pop(); // Mengambil nama file yang dipilih
    var label = $(this).next('.custom-file-label'); // Mengambil label terkait

    // Mengganti teks label dengan nama file yang dipilih
    label.text(fileName);
});