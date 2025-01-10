@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'موفقیت',
            text: '{{ session('success') }}',
            confirmButtonText: 'باشه'
        });
    </script>
@endif
