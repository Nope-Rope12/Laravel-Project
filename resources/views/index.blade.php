<div>
  <a href='{{route('form.create')}}'>Add Contact</a>
    <table>
  <tr>
    <th>id</th>
    <th>Username</th>
    <th>Gender</th>
    <th>Message</th>
    <th>Class</th>
    <th>Email</th>
    <th>created_at</th>
    <th>action</th>
  </tr>
  @foreach($contacts as $contact)
    <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->username}}</td>
        <td>{{$contact->gender}}</td>
        <td>{{$contact->message}}</td>
        <td>{{$contact->class}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->created_at}}</td>
        <td><a href='{{route('form.edit',$contact->id)}}'>Edit</a> <a href='{{route('form.destroy',$contact->id)}}'>Delete</a></td>
    </tr>
  @endforeach
</table>
</div>
