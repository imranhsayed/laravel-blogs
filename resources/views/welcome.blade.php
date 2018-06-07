@extends( 'layouts.master' )
@section( 'title', 'Blogs' )

@section( 'content' )
    <br>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Hello, world!</h1>
            <p class="lead">This is blog posting site</p>
            <hr class="my-4">
            <p>Create a new blog</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{url('/posts/create')}}" role="button">Create new Post</a>
            </p>
        </div>
    </div>
    @endsection
