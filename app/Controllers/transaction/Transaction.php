<?php

namespace Codenom\MidtransSampleData\Controllers\Transaction;

use CodeIgniter\Controller;

class Transaction extends Controller
{
    //load form helper
    protected $helpers = ['form'];

    //render property
    protected $render;

    //midtrans property
    protected $veritrans;

    public function __construct()
    {
        $this->render = \Config\Services::renderer();
        $this->veritrans = service('Veritrans');
    }

    public function index()
    {
        return $this->render->setData(['validation' => $this->validator])->render('Codenom\MidtransSampleData\Views\Transaction\transaction');
    }

    public function attemptTransaction()
    {
        //setup rules
        $rules = [
            'order_id' => ['label' => 'Order ID', 'rules' => 'required'],
            'action'    => ['label' => 'Action', 'rules' => 'required']
        ];

        //check condition validation form
        if (!$this->validate($rules)) {
            //redirect back with input & error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $order_id = $this->request->getPost('order_id');
        $action = $this->request->getPost('action');

        if ($action == 'status') {
            \print_r($this->veritrans->getStatus($order_id));
        } else {
            \print_r($this->veritrans->{$action}($order_id));
        }
    }
}
