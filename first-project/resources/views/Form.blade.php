<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
</head>
<body>
    <h1>Sample Form</h1>
    <form action="submit" method="POST">
        @csrf
        <!-- Text Input -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        <br><br>

        <!-- Email Input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <br><br>

        <!-- Password Input -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <!-- Number Input -->
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="100" required>
        <br><br>

        <!-- Radio Buttons -->
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br><br>

        <!-- Checkboxes -->
        <p>Hobbies:</p>
        <input type="checkbox" id="hobby1" name="hobbies[]" value="reading">
        <label for="hobby1">Reading</label>
        <input type="checkbox" id="hobby2" name="hobbies[]" value="traveling">
        <label for="hobby2">Traveling</label>
        <input type="checkbox" id="hobby3" name="hobbies[]" value="sports">
        <label for="hobby3">Sports</label>
        <br><br>

        <!-- Dropdown -->
        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">Select your country</option>
            <option value="usa">USA</option>
            <option value="canada">Canada</option>
            <option value="uk">UK</option>
            <option value="india">India</option>
        </select>
        <br><br>

        <!-- Submit Button -->
        <button type="submit">Submit</button>

        <!-- Reset Button -->
        <button type="reset">Reset</button>
    </form>
</body>
</html>

</div>
