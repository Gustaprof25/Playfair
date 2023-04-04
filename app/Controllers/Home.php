<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }

    public function formulario()
    {
        return view('inserir');
    }

    public function polialfabetico()
    {
        $mensagem = $this->request->getPost('mensagem');
        $chave = $this->request->getPost('chave');
//        $mensagem = strtolower(str_replace(' ', '', $mensagem));
        $chave = strtolower(str_replace(' ', '', $chave));

        $chave = str_replace('k', 'x', $chave);
        $tam_chave = strlen($chave);
        for ($i = 0; $i < $tam_chave; $i++) {
            // Verifica se é uma letra repetida
            if ($i < $tam_chave - 1 && $chave[$i] == $chave[$i+1]) {
                // Substitui a segunda letra por "x"
                $chave = substr_replace($chave, 'x', $i+1, 1);
            }
        }

        $chave = str_split($chave);

        $alfabeto = str_replace('k', '', 'abcdefghijlmnopqrstuvwxyz');
        $alfabeto = str_split($alfabeto);
// Cria a matriz 5x5
        $matriz = array();
        foreach ($chave as $letra) {
            if (!in_array($letra, $matriz)) {
                $matriz[] = $letra;
            }
        }
        foreach ($alfabeto as $letra) {
            if (!in_array($letra, $matriz)) {
                $matriz[] = $letra;
            }
        }
        $matriz = array_chunk($matriz, 5);
        foreach ($matriz as $chave => $linha) {
            $matriz[$chave] = array_combine(range(0, 4), $linha);
        }

// Imprime a matriz
        foreach ($matriz as $linha) {
            foreach ($linha as $coluna) {
                echo "[" . $coluna . '] ';
            }
            echo '<br>';
        }

    }
}
