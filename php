<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DepartmentModel;
use App\Models\EmployeeModel;

class Department extends ResourceController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->departmentModel = new DepartmentModel();
        $this->employeeModel = new EmployeeModel();
    }

    // Department

    public function getDepartments()
    {
        $data = $this->departmentModel->findAll();
        return $this->respond($data, 200);
    }

    public function getDepartment($id = null)
    {
        $data = $this->departmentModel->getWhere(['id' => $id])->getResult();
        if ($data) {
            return $this->respond($data[0], 200);
        } else {
            return $this->failNotFound('No Department Found with id ' . $id);
        }
    }

    public function createDepartment()
    {
        $data = [
            'name' => $this->request->getVar('name'),
        ];

        $this->departmentModel->insert($data);
        $data['id'] = $this->departmentModel->insertID();

        return $this->respondCreated($data, 201);
    }

    public function updateDepartment($id = null)
    {
        $data = [
            'name' => $this->request->getVar('name'),
        ];

        $this->departmentModel->update($id, $data);

        return $this->respond($data, 200);
    }

    public function deleteDepartment($id = null)
    {
        $data = $this->departmentModel->find($id);
        if ($data) {
            $this->departmentModel->delete($id);
            return $this->respondDeleted($data);
        } else {
            return $this->failNotFound('No Department
