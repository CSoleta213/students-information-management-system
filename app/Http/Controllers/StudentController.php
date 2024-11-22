<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index() {
        $students = Student::with('guardianInfo')->paginate(5);
        // $students = Student::all();
        // $guardian = Student::find(2)->guardianInfo;
        // dd($guardian);
        // dd($students);
        // $students = Student::with('guardianInfo')->paginate(10);
        // $guardian = Student::find(6)->guardianInfo;
        // dd($guardian);
        // $students = Student::paginate(10);

        // return view('index', ['students' => $students]);
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email',
            // 'email' => 'required|email|unique:students',
            // 'email' => 'string|email|unique:students,email|required',
            'course' => 'required',
            'year_level' => 'required',
        ]);

        Student::create($validated);
        // Student::create($request->input());
        // Student::create($request->all());
        // \App\Models\Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Successfully added!');
        // return redirect(route('students.index'))->with('success', 'Notes Successfully Created');
    }

    public function edit(Student $student) {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email,' . $student->id,
            // 'email' => 'required|email|unique:students,email,' . $student->id . ',id',
            // 'email' => [
            //     'required',
            //     'string',
            //     'email',
            //     'max:255',
            //     Rule::unique('students')->ignore($student->id),
            // ],

            // Wrong.
            // 'email'=> 'required|unique:students,email'. $student->id . ',id',
            // 'email' => 'string|email|required',
            'course' => 'required',
            'year_level' => 'required',
        ]);

        // $student->update($validated);
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Updated successfully!');
    }

    public function destroy(Student $student) {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Deleted successfully!');
    }
}
