@extends ('layouts.app')

@section('content')
    <h1>Create Project</h1>

    <form method="POST" action="/projects">
    @csrf
        <div>
            <label>Title</label>
            <input name="title" type="text" placeholder="Title">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" type="text" placeholder="Description"></textarea>
        </div>
        <div>
            <button type="submit" class="button is-link">Submit</button>
            <a href="/projects">cancel</a>
        </div>

    </form> 

    
@endsection