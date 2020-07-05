@extends('adminLTE.master')

@section('content')
    <form role="form" class='ml-5 mt-5 mr-5' action="/pertanyaan" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Question</label>
            <input type="text" class="form-control" name="isi"  placeholder="Question">
        </div>
        <div class="form-group">
            <label>Created At</label>
            <input type="text" class="form-control" name="created_at" placeholder="Date">
        </div>
        <div class="form-group">
            <label>Updated At</label>
            <input type="text" class="form-control" name="updated_at" placeholder="Date">
        </div>
        <button type="submit" class="btn btn-primary btn-info" >Submit</button>
    </div>
    </form>

@endsection
