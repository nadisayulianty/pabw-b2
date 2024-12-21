<?php

namespace App\Controllers\Rasyad;

use App\Controllers\BaseController;
use App\Models\Rasyad\ListAktivitasMahasiswa as ModelsListAktivitasMahasiswa;

class ListAktivitasMahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'list_aktivitas_mahasiswa' => $this->getListAktivitasMahasiswa()
        ];
        return view('rasyad/list_aktivitas_mahasiswa', $data);
    }

    public function getListAktivitasMahasiswa()
    {
        $listAktivitasMahasiswa = new ModelsListAktivitasMahasiswa();
        return $listAktivitasMahasiswa->findAll();
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
            $data['id_aktivitas'] = $listAktivitasMahasiswa->generateUUID();

            if (empty($idAktivitas)) {
                $listAktivitasMahasiswa->insert($data);
            } else {
                $listAktivitasMahasiswa->update($idAktivitas, $data);
            }

            return redirect()->to('table/list-aktivitas-mahasiswa');
        } else {
            echo view('rasyad/list_aktivitas_mahasiswa', [
                'errors' => $validation->getErrors(),
                'list_aktivitas_mahasiswa' => $this->getListAktivitasMahasiswa()
            ]);
        }
    }

    public function delete($id)
    {
        $listAktivitasMahasiswa = new ModelsListAktivitasMahasiswa();
        $listAktivitasMahasiswa->delete($id);
        return redirect()->to('table/list-aktivitas-mahasiswa');
    }
}
