@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Home Section</div>
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col">
                                <div class="w-100 p-4">
                                    @if (session('success'))
                                    <div class="row no-gutters alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <form method="POST" id="appForm" name="appForm" class="appForm p-0"
                                        action="{{ route('home.update', ['homeSection'=>$homeSection->id]) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="label text-primary font-weight-bold"
                                                        for="header_top">Top
                                                        Heading</label>
                                                    <input type="text"
                                                        class="form-control @error('header_top') is-invalid @enderror"
                                                        name="header_top" id="header_top" placeholder="Top Heading"
                                                        value="{{ $homeSection->header_top }}">
                                                    @error('header_top')
                                                    <small id="header_top_help" class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="label text-primary font-weight-bold"
                                                        for="header_middle">Middle
                                                        Heading</label>
                                                    <input type="text"
                                                        class="form-control @error('header_middle') is-invalid @enderror"
                                                        name="header_middle" id="header_middle"
                                                        placeholder="Middle Heading"
                                                        value="{{ $homeSection->header_middle }}">
                                                    @error('header_middle')
                                                    <small id="header_middle_help" class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="label text-primary font-weight-bold"
                                                        for="header_bottom">Bottom
                                                        Heading</label>
                                                    <input type="text"
                                                        class="form-control @error('header_bottom') is-invalid @enderror"
                                                        name="header_bottom" id="header_bottom"
                                                        placeholder="Bottom Heading"
                                                        value="{{ $homeSection->header_bottom }}">
                                                    @error('header_bottom')
                                                    <small id="header_bottom_help" class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="label text-primary font-weight-bold" for="cover">Cover
                                                        Image:
                                                        <a href="{{ asset( 'images/posts/'.$homeSection->cover) }}"
                                                            target="_blank">
                                                            {{ $homeSection->cover }}
                                                        </a></label>
                                                    <input type="file"
                                                        class="form-control @error('cover') is-invalid @enderror"
                                                        name="cover" id="cover">
                                                    @error('cover')
                                                    <small id="cover_help" class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <input type="submit" value="Update" class="btn btn-primary w-auto">
                                                    <div class="submitting"></div>
                                                </div>
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
</div>
</div>
@endsection