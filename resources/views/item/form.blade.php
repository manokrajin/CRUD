@extends('adminLTE.master')

@section('content')
    <form class='ml-5 mt-5 mr-5' method='POST'>
    @csrf
        <div class="form-group">
            <label for="question" class="d-flex justify-content-center ">Masukkan Pertanyaan</label>
            <input type="text" name="isi"  class="form-control" id="question">
            <label for="created_at" class="d-flex justify-content-center ">Masukkan Tanggal Dibuat</label>
            <input type="text" name="created_at"  class="form-control" id="created_at">
            <label for="updated_at" class="d-flex justify-content-center ">Masukkan Tanggal Diperbarui</label>
            <input type="text" name="updated_at"  class="form-control" id="updated_at">
        </div>
        <input type="submit" value="Submit" >

    </form>

@endsection
