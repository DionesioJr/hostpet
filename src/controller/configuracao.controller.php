<?php
class Configuracao
{

    public function index()
    {
        var_dump("aqui");exit;
        $this->conta();
    }

    public function conta()
    {
        $data = $_SESSION;
        _Application::applicationView('configuracao/conta', $data);
    }
}
