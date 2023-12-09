var $modal = $('#modal');
    var image = document.getElementById('image');
    var cropper;
    var croppedImageData; // variabel global untuk menyimpan data gambar yang dipotong

    // Event change ketika gambar dipilih
    $("body").on("change", "#profileImage", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };

        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 0,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    // Event click pada tombol "crop"
    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });

        // Menyimpan data gambar yang dipotong ke dalam variabel
        canvas.toBlob(function(blob) {
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                croppedImageData = reader.result; // menyimpan data gambar yang dipotong ke dalam variabel
                $modal.modal('hide'); // Menutup modal setelah gambar dipotong
            }
        });
    });

    // Event click pada tombol submit
    $('#submit').on('click', function(event) {
         // Menghentikan aksi bawaan tombol submit

        // Melakukan pengiriman data gambar yang dipotong ke server jika data gambar yang dipotong tidak kosong
        if (croppedImageData) {
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{route('pawcare.updateprofile')}}",
                data: {
                    '_token': $('meta[name="_token"]').attr('content'),
                    'image': croppedImageData
                },
                success: function(data) {
                    console.log(data);
                    // Lakukan apa pun yang diperlukan setelah pengiriman data ke server berhasil
                }
            });
        } else {
            alert("Mohon potong gambar terlebih dahulu sebelum mengirim.");
        }
    });