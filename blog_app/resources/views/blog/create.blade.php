<x-layout>
<body>
  <div class="form-container">
        <h2>Create Blog</h2>
        <form action="submit" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{old('title')}}" placeholder="Enter the title">
                @error("title")
                <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter the description">{{old('description')}}</textarea>
                @error("description")
                <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
  
</body>
</x-layout>