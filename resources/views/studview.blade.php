<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<table>
    
    <form method ="post" action ="{{ action('StudController@store') }}">
    @csrf
        <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="{{ old('name') }}">
        
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="{{ old('email') }}">
        
        @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        </td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><input type="text" name="phone"></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type="radio" name="gender" value="male">Male</td>
        <td><input type="radio" name="gender" value="female">Female</td>
    </tr>
    <tr>
        <td>Hobby</td>
        <td><input type="text" name="hobby" id="hobby"></td>
    </tr>
    
    <tr>
        <td>
            <input type ="submit" name="submit" value="submit">
        </td>
    </tr>
    </form>
    
</table>
