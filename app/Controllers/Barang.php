<?php

namespace App\Controllers;

use phpDocumentor\Reflection\PseudoTypes\True_;

class Barang extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function index()
    {
        return view('barang/index');
    }
    public function view()
    {
    }
    public function create()
    {
        return view('barang/create');
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
