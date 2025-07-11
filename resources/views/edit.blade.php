<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form</title>
  <link rel="stylesheet" href="{{asset("assets/styling.css")}}">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <div>
    <form action="{{route("form.update",$contactus->id)}}" method="post" id="form">
    @csrf
      <fieldset>
        <legend>Personal Information</legend>

        <div class="form-input">
          <label for="Username">Name:</label>
          <input type="text" id="Username" name="username" value="{{$contactus->username}}">
        @error('username')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="form-input">
          <label for="email">email:</label>
          <input type="email" id="email" name="email" value="{{$contactus->email}}">
          @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <hr>

        <div class="form-select">
          <label for="Gender">Choose a Gender:</label>
          <select id="Gender" name="gender">
            <option value="">--Select--</option>
            <option value="male" {{$contactus->gender=="male"?"selected":""}}>Male</option>
            <option value="female" {{$contactus->gender=="female"?"selected":""}}>Female</option>
          </select>
          @error('gender')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <hr>

        <div class="form-textarea">
          <label for="message">Brief Description:</label>
          <textarea id="message" name="message" rows="5" cols="40" placeholder="Write a brief description..."> {{$contactus->message}}</textarea>
          @error('message')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <hr>

       <div class="form-datalist">
            <label for="class">Select Class:</label>
            <input list="Class" name="class" id="class" value="{{ old('class', $contactus->class ?? '') }}">
            
            <datalist id="Class">
                <option value="Class X">
                <option value="Class XI">
                <option value="Class XII">
            </datalist>

            @error('class')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>


      <div class="form-button">
      <button type="submit">Update</button>
      </div>

    </form>
  </div>

    <script src="script.js"></script>
</body>
</html>
