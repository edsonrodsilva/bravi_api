<?php

namespace App\Repositories;

use App\Http\Requests\PersonRequest;
use App\Interfaces\PersonInterface;
use App\Traits\ResponseAPI;
use App\Models\Person;

class PersonRepository implements PersonInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllPersons()
    {
        try {
            $persons = Person::all();
            return $this->success("All Persons", $persons);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getPersonById($id)
    {
        try {
            $person = Person::find($id);

            // Check the person
            if (!$person) return $this->error("No person with ID $id", 404);

            return $this->success("Person Detail", $person);

        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestPerson(PersonRequest $request, $id = null)
    {
        try {
            // If person exists when we find it
            // Then update the person
            // Else create the new one.
            $person = $id ? Person::find($id) : new Person;

            // Check the person
            if ($id && !$person) return $this->error("No person with ID $id", 404);

            $person->name = $request->name;

            // Save the person
            $person->save();

            return $this->success(
                $id ? "Person updated"
                    : "Person created",
                $person,
                $id ? 200 : 201
            );
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deletePerson($id)
    {
        try {
            $person = Person::find($id);

            // Check the person
            if (!$person) return $this->error("No person with ID $id", 404);

            // Delete the person
            $person->delete();

            return $this->success("Person deleted", $person);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
