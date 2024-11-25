$(function () {
    $(".tambahMember").on("click", function () {
        $("#judulModalLabel").html("Tambah Data Member");
        $(".modal-footer button[type=submit]").html("Tambah data");
    });
    $(".tampilModelUbah").on("click", function () {
        $("#judulModalLabel").html("Edit Data Member");
        $(".modal-footer button[type=submit]").html("Edit data");
        $(".modal-body form").attr(
            "action",
            "http://localhost:8080/phpmvc/public/member/edit"
        );
        const id = $(this).data("id");
        $.ajax({
            url: "http://localhost:8080/phpmvc/public/member/getEdit",
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function (data) {
                //console.log(data.id);
                $("#id").val(data.id);
                $("#username").val(data.username);
                $("#email").val(data.email);
                $("#jabatan").val(data.jabatan);
            }
        });
    });
});
