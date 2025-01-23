<x-layout>
<body>
  <div>
  <div class="form-container">
        <h2>Create Blog</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter the title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter the description" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
  </div>
</body>
</x-layout>