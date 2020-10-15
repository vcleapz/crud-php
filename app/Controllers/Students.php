<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StudentsModel;

class Students extends BaseController
{
	public function index()
	{
		$model = new StudentsModel;
		$data['students_detail'] = $model->orderBy('id', 'DESC')->findAll();

		return view('list', $data);
	}

	public function create()
	{
		helper(['form','url']);
		
		return View('add');
	}

	public function store()
	{
		$model = new StudentsModel;
 		$validation =  \Config\Services::validation();
		$valid = $this->validate([   
			'nama_depan' => ['label' => 'Nama Depan', 'rules' => 'required'],
		    'nama_belakang' => ['label' => 'Nama Belakang', 'rules' => 'required'],
		    'alamat' => ['label' => 'Alamat', 'rules' => 'required'],
		    'email' => ['label' => 'Email', 'rules' => 'required'],
		    'nomor_hp' => ['label' => 'Nomor HP', 'rules' => 'required|min_length[10]']
		]);

		$errors = $validation->getErrors();
		if (!$valid ){
	        echo view('add', ['errors' => $errors]);
        }else{
  			$data = [
				'nama_depan' => $this->request-> getVar('nama_depan'),
				'nama_belakang' => $this->request-> getVar('nama_belakang'),
				'alamat' => $this->request-> getVar('alamat'),
				'email' => $this->request-> getVar('email'),
				'nomor_hp' => $this->request-> getVar('nomor_hp')
			];

			$save = $model -> insert($data);
			return redirect()->to(base_url());
		}
	}

	public function edit($id = null)
	{
		helper(['form','url']);
		$model = new StudentsModel;
		$data['students'] = $model->where('id',$id)->first();

		return view('edit', $data);
	}

	public function update()
	{
		helper(['form','url']);
		$model = new StudentsModel;
		$id = $this->request-> getVar('id');
		$data = [
			'nama_depan' => $this->request-> getVar('nama_depan'),
			'nama_belakang' => $this->request-> getVar('nama_belakang'),
			'alamat' => $this->request-> getVar('alamat'),
			'email' => $this->request-> getVar('email'),
			'nomor_hp' => $this->request-> getVar('nomor_hp')
		];

			$save = $model -> update($id, $data);
			return redirect()->to(base_url());
	}

	public function delete($id = null)
	{
		$model = new StudentsModel;

		$data['user'] = $model->where('id',$id)->delete();
 
			return redirect()->to(base_url());
	}
}
