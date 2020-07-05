@extends('layouts.master')

@section('content')


 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

<div class="card">
              <div class="card-header d-flex justify-content-between">
                  <h3>Artikel user</h3>
                  <a href="{{ url('/article/create') }}" class="btn btn-primary float-right rounded-pill" title="Add New Article"><i class="fa fa-plus"></i></a>
              </div>

              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              <div class="card-body table-responsive">
                  <table id="dataTable" class="table dataTable table-striped table-hover">
                      <thead>
                            <th>No</th>
                            <th>Judul Artikel</th>
                            <th>Slug</th>
                            <th>Tag</th>
                            <th>Aksi</th>
                      </thead>
                      <tbody>
                        @foreach($articles as $article)
                          <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $article->judul }}</td>
                                <td>{{ $article->slug }}</td>
                                <td>{{ $article->tag }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                      <a href="{{ url('article/'.$article->id.'/edit') }}" class="btn btn-outline-success rounded-pill btn-sm" title="Edit Artikel"><i class="fa fa-edit"></i></a>
                                      <a href="{{ url('article/'.$article->id) }}" class="btn btn-outline-secondary rounded-pill btn-sm" title="Baca Artikel"><i class="fa fa-eye"></i></a>
                                      <form action="{{ url('article/'.$article->id) }}" methd="post">
                                          @csrf
                                          @method('delete')
                                          <button type="submit" class="btn btn-outline-danger rounded-pill  btn-sm" title="Hapus Artikel"><i class="fa fa-trash"></i></button>
                                      </form> 
                                    </div> 
                                  </td>
                            </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>

          </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



@endsection

@push('scripts')
  <script src="{{ asset('sbadmin2/js/swal.min.js') }}"></script>
  <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
  </script>

    
@endpush

@push('jsdataTable')

  <!-- Page level custom scripts -->
  <script src="{{ asset('sbadmin2/js/demo/datatables-demo.js') }}"></script>
@endpush