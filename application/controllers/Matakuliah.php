<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        // Load library form_validation
        $this->load->library('form_validation');

        // Set rules untuk validasi input
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus diisi',
            'min_length' => 'Kode terlalu pendek'
        ]);
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        $this->form_validation->set_rules('sks', 'SKS', 'required',
        [
            'required' => 'SKS harus diisi',
          
        ]);

        // Jalankan validasi
        if ($this->form_validation->run() == false) {
            $this->load->view('view-form-matakuliah');
        } else {
            // Data valid, simpan ke dalam array
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];
            // Tampilkan view dengan data matakuliah
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
?>
