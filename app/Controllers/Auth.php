<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
  public function __construct()
  {
    // helper(['form', 'url']);
    $this->session = \Config\Services::session();
  }

  public function register()
  {
    if ($this->request->getMethod() == 'post') {
      $model = new UserModel();

      $data = [
        'name' => $this->request->getVar('name'),
        'email' => $this->request->getVar('email'),
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        'role_id' => 2
      ];

      $model->save($data);
      return redirect()->to(base_url('auth/login'));
    }

    echo view('auth/register');
  }

  public function login()
  {
    if ($this->request->getMethod() == 'post') {
      $model = new UserModel();

      $email = $this->request->getVar('email');
      $password = $this->request->getVar('password');
      $role_id = $this->request->getVar('role_id');

      $user = $model->where('email', $email)->first();

      if ($user) {
        if (password_verify($password, $user['password'])) {
          if ($role_id != 2) {
            // return redirect()->route('admin');
            return redirect()->to(base_url('admin'));
          } else {
            return redirect()->to(base_url('home'));
            // return redirect()->route('home');
          }
        } else {
          $this->session->setFlashdata('message', 'Password salah');
          return redirect()->to(base_url('auth/login'));
        }
      } else {
        $this->session->setFlashdata('message', 'Email tidak terdaftar');
        return redirect()->to(base_url('auth/login'));
      }
    }

    echo view('auth/login');
  }

  public function logout()
  {
    $this->session->remove('logged_in');
    return redirect()->to(base_url('auth/login'));
  }
}
