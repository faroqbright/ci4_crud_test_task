<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use CodeIgniter\HTTP\ResponseInterface;

class EmployeeController extends BaseController
{
    private $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
    }

    // Create Employee (view)
    public function createView()
    {
        return view('employee/create');
    }

    // Create Employee (handle request)
    public function create()
    {
        $data = $this->request->getPost();

        if ($this->employeeModel->insert($data)) {
            return redirect()->to(site_url('employees'))->with('message', 'Employee created successfully');
        }

        return redirect()->back()->withInput()->with('errors', $this->employeeModel->errors());
    }

    // Read Employees (list view)
    public function index()
    {
        $employees = $this->employeeModel->findAll();
        return view('employee/index', ['employees' => $employees]);
    }

    // Update Employee (view)
    public function updateView($id)
    {
        $employee = $this->employeeModel->find($id);

        if (!$employee) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Employee not found');
        }

        return view('employee/update', ['employee' => $employee]);
    }

    // Update Employee (handle request)
    public function update($id)
    {
        $data = $this->request->getPost();

        if ($this->employeeModel->update($id, $data)) {
            return redirect()->to(site_url('employees'))->with('message', 'Employee updated successfully');
        }

        return redirect()->back()->withInput()->with('errors', $this->employeeModel->errors());
    }

    // Delete Employee (view)
    public function deleteView($id)
    {
        $employee = $this->employeeModel->find($id);

        if (!$employee) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Employee not found');
        }

        return view('employee/delete', ['employee' => $employee]);
    }

    // Delete Employee (handle request)
    public function delete($id)
    {
        if ($this->employeeModel->delete($id)) {
            return redirect()->to(site_url('employees'))->with('message', 'Employee deleted successfully');
        }

        return redirect()->to(site_url('employees'))->with('message', 'Failed to delete employee');
    }
}
