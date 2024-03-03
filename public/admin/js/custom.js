const SwalDelete = (formSubmit) => {
    // console.log(formSubmit.html());
    Swal.fire({
        title: "Konfirmasi!",
        text: "Apakah Anda yakin?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya",
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-outline-danger ms-1",
        },
        buttonsStyling: false,
    }).then(function (result) {
        if (result.value) {
            formSubmit.submit();
        }
    });
};
