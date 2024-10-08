<h1>Create Category</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
<<<<<<< HEAD
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ old('title') }}" required>
=======
    <label for="name">name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
>>>>>>> eb939a3 (8 octobar 2024)
    <button type="submit">Save</button>
</form>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
</ul>