@extends ('layouts.admin')

@section('content')

<div class="container">
    <h1 class="text-center my-4">Facility</h1>
    <a class="btn btn-danger" href="/admin/facility/create">Add Facility</a>
    <table class="table">
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
                <div class="btn-group" role="group">
                  <a class="btn btn-warning" onclick="openInfo({{ $facility->id }})">Edit</a>
                  <a class="btn btn-danger">Delete</a>
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

<script>
  function openInfo(id){
    console.log('test', id);
  }
</script>

@endsection
