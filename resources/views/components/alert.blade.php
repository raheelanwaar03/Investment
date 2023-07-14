<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            swal("oops!", "{!! $error !!}", "error");
        </script>
    @endforeach
@endif
@if (session('success') || session('status'))
    <script>
        swal("Success!", "{!! session('success') !!}", "success");
    </script>
@endif
@if (session('error'))
    <script>
        swal("oops!", "{!! session('error') !!}", "error");
    </script>
@endif
<script>
    Swal.fire(
        'success'
    )

    Swal.fire(
    'error'
    )


    )
</script>
