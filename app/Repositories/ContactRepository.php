<?php

namespace App\Repositories;

use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Http\Resources\ContactResourceCollection;
use App\Interfaces\ContactInterface;
use App\Traits\ResponseAPI;
use App\Models\Contact;

class ContactRepository implements ContactInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllContacts()
    {
        try {
            $contacts = new ContactResourceCollection(Contact::all());
            return $this->success("All Contacts", $contacts);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getContactById($id)
    {
        try {
            $contact = Contact::find($id);

            // Check the contact
            if (!$contact) return $this->error("No contact with ID $id", 404);

            //Format response
            $contact = new ContactResource($contact);

            return $this->success("Contact Detail", $contact);

        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestContact(ContactRequest $request, $id = null)
    {
        try {
            // If contact exists when we find it
            // Then update the contact
            // Else create the new one.
            $contact = $id ? Contact::find($id) : new Contact;

            // Check the contact
            if ($id && !$contact) return $this->error("No contact with ID $id", 404);

            $contact->name = $request->name;

            // Save the contact
            $contact->save();

            //Format response
            $contact = new ContactResource($contact);

            return $this->success(
                $id ? "Contact updated"
                    : "Contact created",
                $contact,
                $id ? 200 : 201
            );
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteContact($id)
    {
        try {
            $contact = Contact::find($id);

            // Check the contact
            if (!$contact) return $this->error("No contact with ID $id", 404);

            // Delete the contact
            $contact->delete();

            //Format response
            $contact = new ContactResource($contact);

            return $this->success("Contact deleted", $contact);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
