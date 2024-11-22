<h2>List of Students</h2>

<a href="{{ route('students.create') }}">Add New Student</a><br><br>

@if(session('success'))
    {{ session('success') }}
    <br><br>
@endsession

{{-- <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->year_level }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}">edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> --}}

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Father</th>
        <th>Mother</th>
        <th>Guardian</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->guardianInfo->fathers_name }}</td>
            <td>{{ $student->guardianInfo->mothers_name }}</td>
            <td>{{ $student->guardianInfo->legal_guardians_name }}</td>
        </tr>
    @endforeach
</table>
{!! $students->links() !!}

{{-- {!! $students->links() !!} --}}
