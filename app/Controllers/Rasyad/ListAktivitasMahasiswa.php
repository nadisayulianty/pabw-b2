<?php

namespace App\Controllers\Rasyad;

use App\Controllers\BaseController;
use App\Models\Rasyad\ListAktivitasMahasiswa as ModelsListAktivitasMahasiswa;

class ListAktivitasMahasiswa extends BaseController
{
    public function index()
    {
        $data = $this->getListAktivitasMahasiswa();
        return view('rasyad/list_aktivitas_mahasiswa', $data);
    }

    public function getListAktivitasMahasiswa()
    {
        $model = model(ModelsListAktivitasMahasiswa::class);
        $model->orderBy('id_aktivitas', 'DESC');

        $search = $this->request->getGet('search');
        if (!empty($search)) {
            $model->like('nama_jenis_aktivitas', $search)
                ->orLike('nm_asaldata', $search);
        }

        return [
            'list_aktivitas_mahasiswa' => $model->paginate(5),
            'pager' => $model->pager,
            'search' => $search
        ];
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nm_asaldata' => 'required'
        ]);

        $isValid = $validation->withRequest($this->request)->run();

        if ($isValid) {

            $idAktivitas = $this->request->getPost('id_aktivitas');
            $listAktivitasMahasiswa = new ModelsListAktivitasMahasiswa();

            $data = $validation->getValidated();

            if (empty($idAktivitas)) {
                $data['id_aktivitas'] = $listAktivitasMahasiswa->getNewId();
                $listAktivitasMahasiswa->insert($data);
            } else {
                $listAktivitasMahasiswa->update($idAktivitas, $data);
            }

            return redirect()->to('table/list-aktivitas-mahasiswa')->with('success', 'Data berhasil disimpan');
        } else {
            $data = $this->getListAktivitasMahasiswa();
            $data['errors'] = $validation->getErrors();
            echo view('rasyad/list_aktivitas_mahasiswa', $data);
        }
    }

    public function delete($id)
    {
        $listAktivitasMahasiswa = new ModelsListAktivitasMahasiswa();
        $listAktivitasMahasiswa->delete($id);
        return redirect()->to('table/list-aktivitas-mahasiswa')->with('success', 'Data berhasil dihapus');
    }
}
