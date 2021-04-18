@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="profile/{{Auth::user()->profile->id}}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label for="exampleFormControlTextarea1">Biodata</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="biodata"  value='{{Auth::user()->profile->bio}}' rows="3"></textarea>
                                      </div>
                                    <div class="form-group row">
                                        <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                                        <div class="col-md-6">
                                            <input id="profile_image" type="file" class="form-control" name="profile_image">
                                            {{-- @if (auth()->user()->->profile()->image)
                                                <code>{{ auth()->user()->profile()->image }}</code>
                                            @endif --}}
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0 mt-5">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection