<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PeopleController extends Controller
{
    public function myProfile()
    {
        return view('MyProfile');
    }

    public function extraInfo()
    {
        return view('ExtraInfo');
    }

    public function index()
    {
        $people = Person::all();
        return view('people.index', compact('people'));
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:people',
        ]);
        
        Person::create($data);
        return redirect()->route('people.index');
    }

    public function edit(Person $person)
    {
        return view('people.edit', compact('person'));
    }

    public function update(Request $request, Person $person)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:people,email,' . $person->id,
        ]);
        
        $person->update($data);
        return redirect()->route('people.index');
    }

    public function show(Person $person)
    {
        return view('people.show', compact('person'));
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('people.index');
    }
}
