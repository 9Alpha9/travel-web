@if (session('success'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '{{ session("success") }}',
        showConfirmButton: false,
        timer: 1300
    })
</script>
@endif

@if($errors->count() > 0)
<script>
    let message = "";
    @foreach($errors->all() as $message)
    message += '{{ $message }}';
    message += '<br>';
    @endforeach
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Oops...',
        html: message,
    })
</script>
@endif

<script>
    $('button.btnDelete').on('click', function() {
        var href = $(this).attr('href');
        var no = $(this).data('no');
        Swal.fire({
                title: "Anda yakin untuk menghapus data nomer : \"" + no + "\"?",
                text: "Setelah dihapus, data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya, hapus'
            })
            .then((willDelete) => {
                if (willDelete.value) {
                    $('#deleteForm').attr('action', href);
                    $('#deleteForm').submit();
                }
            })
    });
</script>
