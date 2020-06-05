@extends("layouts.app")

@section("content")
    <div class="container">
        <h2>Edit Category</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="/category/{{ $category->id }}">
            {{ method_field("PATCH")}}
            {{ csrf_field() }}
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <div class="form-group">
              <label>Description</label>
              <input type="text" name="description" class="form-control" value="{{ $category->description }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection