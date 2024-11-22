<h2>Edit Student</h2>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    <br><br>
@endif

<form action="{{ route('students.update', $student->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $student->name }}"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $student->email }}"><br><br>

    <label for="course">Course:</label>
    <select name="course" id="course">
        <option value="" selected disabled>---select your course---</option>
        <option value="ACT" {{ $student->course == 'ACT' ? 'selected' : ''}}>ACT</option>
        <option value="BSIS" {{ $student->course == 'BSIS' ? 'selected' : ''}}>BSIS</option>
    </select><br><br>

    <label for="year_level">Year Level:</label>
    <select name="year_level" id="year_level">
        <option value="" selected disabled>---select your course---</option>
        <option value=1 {{ $student->year_level == 1 ? 'selected' : ''}}>1st Year</option>
        <option value=2 {{ $student->year_level == 2 ? 'selected' : ''}}>2nd Year</option>
        <option value=3 {{ $student->year_level == 3 ? 'selected' : ''}}>3rd Year</option>
        <option value=4 {{ $student->year_level == 4 ? 'selected' : ''}}>4th Year</option>
    </select><br><br>

    <button type="submit">Edit</button>
</form>
