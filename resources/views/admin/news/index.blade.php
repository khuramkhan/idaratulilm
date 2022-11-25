@extends('admin.layout.interface')

@section('content')

    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="horz-layout-colored-controls">News</h4>
                </div>
                @if (session()->has('success') || session()->has('error'))
                    <div class="alert alert-{{session()->has('success') ? 'success' : 'danger'}}">
                        {{session()->has('success') ? session()->get('success') : session()->get('error')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Detail</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->detail}}</td>
                                    <td><img src="storage/{{$post->image}}" height="40px"></td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('deleteNews',['id'=>$post->id]) }}">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
