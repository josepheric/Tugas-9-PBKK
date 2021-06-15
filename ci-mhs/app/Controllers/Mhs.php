<?php namespace App\Controllers;

use \App\Models\MhsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Mhs extends BaseController
{
	public function index()
	{
        $news = new MhsModel();
        $data['newses'] = $news->findAll();
		echo view('admin_list', $data);
    }

    //--------------------------------------------------------------------------
    

    //--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['NRP' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $news = new MhsModel();
            $news->insert([
                "NRP" => $this->request->getPost('NRP'),
                "Nama" => $this->request->getPost('Nama'),
                "Alamat" => $this->request->getPost('Alamat'),
                "NoHP" => $this->request->getPost('NoHP'),
                "Jurusan" => $this->request->getPost('Jurusan'),
            ]);
            return redirect('admin/mahasiswa');
        }
		
        // tampilkan form create
        echo view('admin_create');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $news = new MhsModel();
        $data['news'] = $news->where('NRP', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'NRP' => 'required',
            'Nama' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $news->update($id, [
                "NRP" => $this->request->getPost('NRP'),
                "Nama" => $this->request->getPost('Nama'),
                "Alamat" => $this->request->getPost('Alamat'),
                "NoHP" => $this->request->getPost('NoHP'),
                "Jurusan" => $this->request->getPost('Jurusan'),
            ]);
            return redirect('admin/mahasiswa');
        }

        // tampilkan form edit
        echo view('admin_edit', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $news = new MhsModel();
        $news->delete($id);
        return redirect('admin/mahasiswa');
    }
}