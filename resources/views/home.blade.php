@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="post" action="/importImage" enctype="multipart/form-data">
                      <div class="form-group">
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

                        {!! csrf_field() !!}
                        <label for="image">Import Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
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
