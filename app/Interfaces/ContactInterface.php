<?php

namespace App\Interfaces;

use App\Http\Requests\ContactRequest;

interface ContactInterface
{
    /**
     * Get all contacts
     *
     * @method  GET api/contacts
     * @access  public
     */
    public function getAllContacts();

    /**
     * Get Contact By ID
     *
     * @param   integer     $id
     *
     * @method  GET api/contacts/{id}
     * @access  public
     */
    public function getContactById($id);

    /**
     * Create | Update contact
     *
     * @param   \App\Http\Requests\ContactRequest    $request
     * @param   integer                             $id
     *
     * @method  POST    api/contacts       For Create
     * @method  PUT     api/contacts/{id}  For Update
     * @access  public
     */
    public function requestContact(ContactRequest $request, $id = null);

    /**
     * Delete contact
     *
     * @param   integer     $id
     *
     * @method  DELETE  api/contacts/{id}
     * @access  public
     */
    public function deleteContact($id);
}
