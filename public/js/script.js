$(function() {
    $(".tombolTambahData").on("click", function() {
        // console.log("ok");
        $("#formModalLabel").html("Tambah Data Mahasiswa");
        $(".modal-footer button[type=submit]").html("Tambah Data");
    });

    $(".tampilModalUbah").on("click", function() {
        // console.log("ok");
        $("#formModalLabel").html("Ubah Data Mahasiswa");
        $(".modal-footer button[type=submit]").html("Ubah Data");
        $(".modal-body form").attr(
            "action",
            "http://localhost/phpmvc/public/mahasiswa/ubah"
        );

        const id = $(this).data("id");
        // console.log(id);

        //ini pake javasript
        $.ajax({
            url: "http://localhost/phpmvc/public/mahasiswa/getUbah",
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function(data) {
                // console.log(data);
                $("#nama").val(data.nama);
                $("#nrp").val(data.nrp);
                $("#email").val(data.email);
                $("#jurusan").val(data.jurusan);
                $("#id").val(data.id);
            },
        });
    });
});