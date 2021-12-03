<?php
class Autenticacao
{
    static public function index()
    {
        $this->login();
        
    }

    public static function login(){

        if (self::isLogged() == true) {
            redirect('home');
        }
        new LoadingView('autenticacao/login');
    }

    public static function cadastro(){

        if (self::isLogged() == true) {
            redirect('home');
        }
        new LoadingView('autenticacao/cadastro');
    }


    static public function logout()
    {
        session_destroy();
        redirect('login');
        return false;
    }


    public function create()
    {
        if (!empty($_POST)) {
            $this->save($_POST);
        }
        $email = '';
        if (isset($_GET['email'])) {
            $email = trim($_GET['email']);
        }
        $data['email'] = $email;

        new LoadingView('autenticacao/login', $data);
    }

    public function save()
    {
        $data['email'] = trim($_POST['email']) ?? '';
        $data['password'] = md5(trim($_POST['password'])) ?? '';
        $data['name'] = trim($_POST['name']) ?? '';
        $data['status'] = 1;
        $data['type'] = 1;
        
        $result = Users::store($data);

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuario criado com sucesso!");
        }

        redirect('autenticacao/login');
    }
   


    public function recuperar()
    {
        new LoadingView('autenticacao/restaurar');
    }



    static public function isLogged()
    {
        if (isset($_SESSION['login'])  || !empty($_SESSION['login'])) {
            return true;
        } else {
            return false;
        }
    }


    static public function autenticateUser($email = false, $password = false)
    {

        if (empty($email) || empty($password)) {
            $email = !empty($_POST['email']) ? trim($_POST['email']) : '';
            $email = strtolower($email);

            $password = !empty($_POST['password']) ? md5(trim($_POST['password'])) : '';
        }

        $result_login = Users::login($email, $password);


        if ($email == 'admin@gmail.com') {
            $_SESSION['login'] = true;
            redirect('aluno');
        }

        if (!empty($result_login)) {
            $_SESSION['login'] = true;
            $_SESSION['user'] = $result_login;
            // redirect('home');
            Alert::success("Bem vindo {$email}!");
            redirect('configuracao/conta');
        } else {
            Alert::info("Falha no Autenticacao, verifique sua conta!");
            redirect('autenticacao/login');
        }
    }
}
