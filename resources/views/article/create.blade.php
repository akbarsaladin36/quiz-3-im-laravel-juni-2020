@extends('layouts.master')

@section('content')


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Article List</h1>

          <div class="card">
              <div class="card-header d-flex justify-content-between">
                  <h3>Create New Article</h3>
                </div>
              <div class="card-body">
                  <form action="{{ url('article') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul artikel">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Artikel</label>
                            <textarea type="text" class="form-control" rows="10" id="isi" name="isi" placeholder="Masukkan isi artikel"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tag">Tag Artikel</label>
                            <input type="text" class="form-control" id="tag" name="tag" placeholder="ketik tag artikel">
                        </div>
                        <button type="submit" class="btn btn-primary has-riple">Simpan</button>

                  </form>
              </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 



@endsection
© 2020 GitHub, Inc.