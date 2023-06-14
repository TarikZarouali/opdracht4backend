<?php
    class Leverancier extends BaseController
    {
        private readonly mixed $LeverancierModel;

        public function __construct()
        {
            $this->LeverancierModel = $this->model('LeverancierModel');
        }
        public function index()
        {
            if($_SERVER['REQUEST_METHOD'] == 'GET')
            {
                 // exit();
                $leveranciers = $this->LeverancierModel->GetAllLeveranciers();
                $data = ['Leveranciers' => $leveranciers];

               

                $this->view('Leverancier/index', $data);
            }
        }
    }
?>