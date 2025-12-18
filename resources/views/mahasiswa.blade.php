@extends('layouts.main')

@section('content')
<h1 class=text-center>Data Mahasiswa</h1>
<div class="row mt-4">
    <a href="/tambahmahasiswa">
    <button type="button" class="btn btn-success mb-2">Tambah Data</button></a>
    @if ($message = Session::get('success'))
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          title: 'Success!',
          text: '{{ $message }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      });
    </script>
    @endif

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Prodi</th>
      <th scope="col">Email</th>
      <th scope="col">No. Hp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i= 1 ?>
    @foreach ($data as $mahasiswa)
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td>{{$mahasiswa["name"]}}</td>
      <td>{{$mahasiswa["nim"]}}</td>
      <td>{{$mahasiswa["prodi"]}}</td>
      <td>{{$mahasiswa["email"]}}</td>
      <td>{{$mahasiswa["nohp"]}}</td>
      <td>
        <a href="tampildata/{{ $mahasiswa['id']}}" class="btn btn-primary">Edit</a>
        <a href="#" class="btn btn-danger delete" data-id="{{ $mahasiswa['id']}}">Hapus</a>
      </td>
      <?php $i++ ?>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>

  

  $( '.delete').click(function( ){

    let id = $(this).attr('data-id');
    let name = $(this).attr('data-name');
  const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
  },
  buttonsStyling: false
});
swalWithBootstrapButtons.fire({
  title: "Are you sure want to delete" + name + "?",
  showCancelButton: true,
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel!",
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    window.location="/delete/"+id;
    swalWithBootstrapButtons.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire({
      title: "Cancelled",
      text: "Your imaginary file is safe :)",
      icon: "error"
    });
  }
});
  });
</script>
@endsection