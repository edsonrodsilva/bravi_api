<?php

namespace App\Interfaces;

use App\Http\Requests\PersonRequest;

interface PersonInterface
{
    /**
     * Get all persons
     *
     * @method  GET api/persons
     * @access  public
     */
    public function getAllPersons();

    /**
     * Get Person By ID
     *
     * @param   integer     $id
     *
     * @method  GET api/persons/{id}
     * @access  public
     */
    public function getPersonById($id);

    /**
     * Create | Update person
     *
     * @param   \App\Http\Requests\PersonRequest    $request
     * @param   integer                             $id
     *
     * @method  POST    api/persons       For Create
     * @method  PUT     api/persons/{id}  For Update
     * @access  public
     */
    public function requestPerson(PersonRequest $request, $id = null);

    /**
     * Delete person
     *
     * @param   integer     $id
     *
     * @method  DELETE  api/persons/{id}
     * @access  public
     */
    public function deletePerson($id);
}
