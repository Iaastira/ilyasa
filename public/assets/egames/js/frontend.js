$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "api/artikel";

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function(berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function(key, value) {
                $(".data-siswa").append(
                    `
                    <li>${
                        value.nama
                    } <button class="btn btn-danger btn-sm hapus-data" data-id="${
                        value.id
                    }">Hapus</button></li>
                    `
                );
            });
        }
    });