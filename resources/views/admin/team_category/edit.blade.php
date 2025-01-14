@extends('admin.app_admin')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Team Category</h1>

    <form action="{{ route('admin_team_category_update',$team_category->id) }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary"></h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin_team_category_view') }}" class="btn btn-primary btn-sm"><i class="fa fa-reply" aria-hidden="true"></i> Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name *</label>
                            <input type="text" name="name" class="form-control" value="{{ $team_category->name }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Designation *</label>
                            <input type="text" name="designation" class="form-control" value="{{ $team_category->designation }}" autofocus>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">{{ UPDATE }}</button>
            </div>
        </div>
    </form>

@endsection
