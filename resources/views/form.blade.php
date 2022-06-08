@extends('layout')
@section('container')
<div class="row justify-content-md-center mt-5 mb-5">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Import Excel File</strong>&nbsp;&nbsp;(<a href="{{ url('/sample/StudentRegisteration.xlsx')}}">Download Sample</a>)
            </div>
            <form method="post" action="import" enctype="multipart/form-data">
                @csrf
                <div class="card-body card-block">
                    @if(session('errors'))
                    @foreach ($errors as $error)
                    <label class="mb-2" style="color:red;">{{ $error}}</label>
                    @endforeach
                    @endif
                    @if(session('success'))
                    <label class="mb-2" style="color:green;">{{ Session('success')}}</label>
                    @endif
                    <div class="has-success form-group">
                        <label for="inputIsValid" class=" form-control-label mb-2">Select Your Excel File</label>
                        <input type="file" name="doc" class="form-control">
                    </div>
                    <div class="form-group text-center mt-4">
                        <input type="submit" name="submit" value="Submit" class=" btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection