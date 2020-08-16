
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    var url = $(this).attr('href');
    console.log(url);
    Swal.fire({
        title: 'Bạn có chắc muốn xóa?',
        text: "Dữ liệu sẽ bị xóa tạm thời!",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng ý',
        cancelButtonText: 'Hủy'
    }).then(function(result) {
        if (result.value) {
            window.location.href = url;
        }
    });
});