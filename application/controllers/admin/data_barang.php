<?php

class Data_barang extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_barang        = $this->input->post('nama_barang');
        $jenis_kerudung     = $this->input->post('jenis_kerudung');
        $warna              = $this->input->post('warna');
        $ukuran             = $this->input->post('ukuran');
        $harga              = $this->input->post('harga');
        $stok               = $this->input->post('stok');
        $terjual            = $this->input->post('terjual');
        $gambar             = $_FILES['gambar']['name'];
        if ($gambar=''){}else{
            $config ['upload_path']= './uploads';
            $config ['allowed_types']= 'jpg|jpeg|png|gif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Di Upload!";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_barang'       => $nama_barang,
            'jenis_kerudung'    => $jenis_kerudung,
            'warna'             => $warna,
            'ukuran'            => $ukuran,
            'harga'             => $harga,
            'stok'              => $stok,
            'terjual'           => $terjual,
            'gambar'            => $gambar
        );
            
        $this->model_barang->tambah_barang($data, 'tb_barang');
        redirect('admin/data_barang/index');
        }

        public function edit($id)
        {
            $where = array('id_barang' =>$id);
            $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/edit_barang', $data);
            $this->load->view('templates_admin/footer');
        }

        public function update(){
            $id                 = $this->input->post('id_barang');
            $nama_barang        = $this->input->post('nama_barang');
            $jenis_kerudung     = $this->input->post('jenis_kerudung');
            $warna              = $this->input->post('warna');
            $ukuran             = $this->input->post('ukuran');
            $harga              = $this->input->post('harga');
            $stok               = $this->input->post('stok');
            $terjual            = $this->input->post('terjual');
            $gambar             = $this->input->post('gambar');

            $data = array(
                'nama_barang'       => $nama_barang,
                'jenis_kerudung'    => $jenis_kerudung,
                'warna'             => $warna,
                'ukuran'            => $ukuran,
                'harga'             => $harga,
                'stok'              => $stok,
                'terjual'           => $terjual,
                'gambar'            => $gambar
            );

            $where = array(
                'id_barang' => $id
            );
            
            $this->model_barang->update_data($where,$data,'tb_barang');
            redirect('admin/data_barang/index');
        }

        public function hapus ($id)
        {
            $where = array('id_barang' => $id);
            $this->model_barang->hapus_data($where, 'tb_barang');
            redirect('admin/data_barang/index');
        }
    }
