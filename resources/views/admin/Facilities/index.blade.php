@extends ('layouts.admin')

@section('content')

<div class="container">
    <h1 class="text-center my-5">Manage Facility</h1>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    @if (session()->has('delete'))
    <div class="alert alert-danger" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="table-responsive">
      <a class="btn btn-danger my-3" href="/admin/facilities/create">Add Facility</a>
      <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Facility</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @php
              $counter = 1;
              @endphp
              @foreach ($facilities as $facility)
              <tr>
                <th scope="row">{{ $counter++ }}</th>
                <td>{{ $facility->name }}</td>
                <td>{{ $facility->category->name }}</td>
                <td>
                    <a class="btn btn-success" href="/admin/facilities/{{ $facility->slug }}">View</a>
                    <a href="/admin/facilities/{{ $facility->slug }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/facilities/{{ $facility->slug }}" method="post" class="d-inline" id="deleteForm-{{ $facility->slug }}">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger delete-btn" data-facility-id="{{ $facility->slug }}">
                        Delete
                      </button>
                   </form>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
     // Menangani klik tombol "Delete"
     document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function (event) {
           event.preventDefault();
           const facilityId = this.getAttribute('data-facility-id');

           // Menampilkan konfirmasi SweetAlert
           Swal.fire({
              title: 'Are you sure?',
              text: 'You won\'t be able to revert this!',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!'
           }).then((result) => {
              // Jika pengguna menekan tombol "Yes"
              if (result.isConfirmed) {
                 // Submit form delete
                 document.getElementById('deleteForm-' + facilityId).submit();
              }
           });
        });
     });
  });
</script>


@endsection
