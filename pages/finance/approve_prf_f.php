<?php

public function disetujui($nomor)
    {
        $sql="UPDATE tb_prf SET status_prf='disetujui' WHERE nomor_prf=$nomor";
        $this->db->query($sql);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">  Data Telah Disetujui<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect(site_url('approve_prf_f'));
    }

    public function ditolak($nomor)
    {
        $sql="UPDATE tb_prf SET status_prf='ditolak' WHERE nomor_prf=$nomor";
        $this->db->query($sql);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">  Data Telah Ditolak<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect(site_url('approve_prf_f'));
    }


    ?>