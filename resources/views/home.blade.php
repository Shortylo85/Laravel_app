@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                          {{ $error }}
                    </div>
                    @endforeach

                    <form method="post" action="/importImage" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Import Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                        <input type="submit" class="btn btn-primary btn-sm" value="submit">
                    </form>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
