<?php

class AdminController extends BaseController {

    /**
     * Inisialisasi.
     *
     * @return \AdminController
     */
    public function __construct()
    {
        // Terapkan penyaringan autotentikasi admin.
        $this->beforeFilter('admin-auth');
    }

}