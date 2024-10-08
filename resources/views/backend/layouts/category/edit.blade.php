<h1>Edit Category</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ old('title', $category->title) }}" required>

    <label for="name">name:</label>
    <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>

    <button type="submit">Update</button>
</form>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif