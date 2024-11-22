<h2>Add New Student</h2>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    <br><br>
@endif

<form action="{{ route('students.store') }}" method="post">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"><br><br>

    <label for="course">Course:</label>
    <select name="course" id="course">
        <option value="" selected disabled>---select your course---</option>
        <option value="ACT">ACT</option>
        <option value="BSIS">BSIS</option>
    </select><br><br>

    <label for="year_level">Year Level:</label>
    <select name="year_level" id="year_level">
        <option value="" selected disabled>---select your course---</option>
        <option value=1>1st Year</option>
        <option value=2>2nd Year</option>
        <option value=3>3rd Year</option>
        <option value=4>4th Year</option>
    </select><br><br>

    <button type="submit">Add</button>
</form>
