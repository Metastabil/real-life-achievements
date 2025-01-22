<?php
namespace KPO\Controllers;

use KPO\Models\UserModel;

class Users extends Controller {
    private UserModel $user_model;

    public function __construct() {
        parent::__construct();

        $this->user_model = new UserModel();
    }

    public function index() :void {
        $data = [
            'title' => esc(LANG['users']['titles']['index']),
            'elements' => $this->user_model->get()
        ];

        $this->view->render('templates/header', $data)
                   ->render('users/index', $data)
                   ->render('templates/footer', $data);
    }
}