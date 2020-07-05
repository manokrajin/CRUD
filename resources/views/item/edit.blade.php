@extends('adminLTE.master')

@section('content')
    @foreach($pertanyaan as $key => $value)
    <form role="form" class='ml-5 mt-5 mr-5' action="/pertanyaan/{{$value->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Question</label>
            <input type="text" class="form-control" value="{{$value->isi}}" name="isi"  placeholder="Question">
        </div>
        <div class="form-group">
            <label>Created At</label>
            <input type="text" class="form-control" value="{{$value->created_at}}" name="created_at" placeholder="Date">
        </div>
        <div class="form-group">
            <label>Updated At</label>
            <input type="text" class="form-control" value="{{$value->updated_at}}" name="updated_at" placeholder="Date">
        </div>
        <button type="submit" class="btn btn-primary btn-info" >Submit</button>
    </div>
    </form>
    @endforeach
@endsection
