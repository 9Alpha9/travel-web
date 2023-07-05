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