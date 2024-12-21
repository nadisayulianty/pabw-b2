<?php

namespace App\Controllers\Rasyad;

use App\Controllers\BaseController;
use App\Models\JenisAktivitasMahasiswa as ModelsJenisAktivitasMahasiswa;
use App\Models\Rasyad\JenisKeluar as ModelsJenisKeluar;

class JenisAktivitasMahasiswa extends BaseController
{
	public function index()
	{
		$data = $this->getJenisAktivitasMahasiswa();
		return view('rasyad/jenis_aktivitas_mahasiswa', $data);
	}

	public function getJenisAktivitasMahasiswa()
	{
		$model = model(ModelsJenisAktivitasMahasiswa::class);
		$model->orderBy('id_jenis_aktivitas_mahasiswa', 'DESC');

		$search = $this->request->getGet('search');

		if ($search) {
			$model->like('nama_jenis_aktivitas_mahasiswa', $search);
		}

		return [
			'jenis_aktivitas_mahasiswa' => $model->paginate(5),
			'pager' => $model->pager,
			'search' => $search
		];
	}

	public function save()
	{

		$validation = \Config\Services::validation();

		$validation->setRules([
			'id_jenis_aktivitas_mahasiswa' => 'permit_empty|numeric',
			'nama_jenis_aktivitas_mahasiswa' => 'required',
			'untuk_kampus_merdeka' => 'required|in_list[y,n]'
		], [
			'nama_jenis_aktivitas_mahasiswa' => [
				'required' => 'Nama jenis aktivitas mahasiswa harus diisi'
			],
			'untuk_kampus_merdeka' => [
				'required' => 'Untuk kampus merdeka harus diisi',
				'in_list' => 'Untuk kampus merdeka harus diisi dengan y atau n'
			]
		]);

		$isDataValid = $validation->withRequest($this->request)->run();
		$errors = $validation->getErrors();

		if ($isDataValid) {
			$jenisKeluar = new ModelsJenisAktivitasMahasiswa();

			$data = $validation->getValidated();
			$data['untuk_kampus_merdeka'] = $data['untuk_kampus_merdeka'] == 'y' ? '1' : '0';

			$idJenisKeluar = $this->request->getPost('id_jenis_aktivitas_mahasiswa');

			if ($idJenisKeluar) {
				$jenisKeluar->update($idJenisKeluar, $data);
			} else {
				$jenisKeluar->insert($data);
			}

			return redirect()->to('table/jenis-aktivitas-mahasiswa')->with('success', 'Data berhasil disimpan');
		}

		return redirect()->to('table/jenis-aktivitas-mahasiswa')->with('errors', $errors);
	}

	public function delete($id)
	{
		$jenisKeluar = new ModelsJenisAktivitasMahasiswa();
		$jenisKeluar->delete($id);

		return redirect()->to('table/jenis-aktivitas-mahasiswa')->with('success', 'Data berhasil dihapus');
	}
}
