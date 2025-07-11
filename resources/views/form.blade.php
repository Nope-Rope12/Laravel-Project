<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form</title>
  <link rel="stylesheet" href="{{ asset('assets/styling.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div>
    <form action="{{ route('form.store') }}" method="POST" id="form">
      @csrf

      <fieldset>
        <legend>Personal Information</legend>

        <!-- Username -->
        <div class="form-input">
          <label for="Username">Name:</label>
          <input type="text" id="Username" name="username" value="{{ old('username') }}">
          @error('username')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Email -->
        <div class="form-input">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}">
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <hr>

        <!-- Gender -->
        <div class="form-select">
          <label for="Gender">Choose a Gender:</label>
          <select id="Gender" name="gender">
            <option value="">--Select--</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
          </select>
          @error('gender')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <hr>

        <!-- Message -->
        <div class="form-textarea">
          <label for="message">Brief Description:</label>
          <textarea id="message" name="message" rows="5" cols="40" placeholder="Write a brief description...">{{ old('message') }}</textarea>
          @error('message')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <hr>

        <!-- Class selection -->
        <div class="form-datalist">
          <label for="class">Select Class:</label>
          <input list="ClassList" name="class" id="class" value="{{ old('class') }}">
          <datalist id="ClassList">
            <option value="Class X">
            <option value="Class XI">
            <option value="Class XII">
          </datalist>
          @error('class')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-button">
          <button type="submit">Submit</button>
        </div>

      </fieldset>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
