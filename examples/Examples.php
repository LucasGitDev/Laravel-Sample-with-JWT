<?php

class MyExamples
{

    public function ifExamples()
    {
        $idade = 18;
        $nome = 'João';
        $temCarteira = true;
        $temCarro = false;

        if ($idade >= 18) {
            echo $nome . ': Pode tirar carteira de motorista';
        } else {
            echo $nome . ': Não tirar carteira de motorista';
        }

        if ($idade >= 18 && $temCarteira) {
            echo $nome . ': Pode dirigir';
        } elseif ($idade >= 18 && !$temCarteira) {
            echo $nome . ': Pode tirar carteira de motorista';
        } else {
            echo $nome . ': Não pode dirigir';
        }

        if ($idade >= 18 && $temCarteira && $temCarro) {
            echo $nome . ': Pode dirigir';
        } elseif ($idade >= 18 && $temCarteira && !$temCarro) {
            echo $nome . ': Pode tirar carteira de motorista';
        } else {
            echo $nome . ': Não pode dirigir';
        }
    }

    protected function switchExample()
    {
        $corEscolhida = 'vermelho';

        switch ($corEscolhida) {
            case 'vermelho':
                echo 'A cor escolhida é vermelho';
                break;
            case 'azul':
                echo 'A cor escolhida é azul';
                break;
            case 'verde':
                echo 'A cor escolhida é verde';
                break;
            default:
                echo 'A cor escolhida não é vermelho, azul ou verde';
                echo 'Você realmente gosta de cores?';
                break;
        }
    }

    protected function whileExample()
    {
        $contador = 0;
        while ($contador < 10) {
            echo $contador;
            $contador++;
        }
    }

    protected function doWhileExample()
    {
        $contador = 0;
        do {
            echo $contador;
            $contador++;
        } while ($contador < 10);
    }

    protected function forExample()
    {
        for ($i = 0; $i < 10; $i++) {
            echo $i;
        }
    }

    protected function foreachExample()
    {
        $nomes = ['João', 'Maria', 'José', 'Pedro', 'Ana', 'Paulo', 'Joaquim', 'Mariana', 'Júlia', 'Jorge'];
        foreach ($nomes as $nome) {

            if ($nome == 'Pedro') {
                continue;
            }

            echo $nome;

            if ($nome == 'Mariana') {
                break;
            }
        }
    }

    /**
     * access_modifier function functionName($parameter, $default = true, int $age = 18) {
     *      code...
     * }
     */

private function createArrayExamples()
{
    $nomes = ['João', 'Maria', 'José', 'Pedro', 'Júlia', 'Jorge'];

    foreach ($nomes as $nome) {
        echo $nome;
    }

    $nomes = array('João', 'Maria', 'José', 'Pedro', 'Júlia', 'Jorge');

    foreach ($nomes as $nome) {
        echo $nome;
    }

    $nomes[] = 'João';
    $nomes[] = 'Maria';
    $nomes[] = 'José';
    $nomes[] = 'Pedro';
    $nomes[] = 'Júlia';
    $nomes[] = 'Jorge';

    foreach ($nomes as $nome) {
        echo $nome;
    }
}

private function createAssociativeArrayExamples()
{
    $nomes = array(
        'João' => 18,
        'Maria' => 20,
        'José' => 22,
        'Pedro' => 24,
        'Júlia' => 26,
        'Jorge' => 28
    );

    foreach ($nomes as $nome => $idade) {
        echo $nome . ' tem ' . $idade . ' anos';
    }

    $nomes['João'] = 18;
    $nomes['Maria'] = 20;
    $nomes['José'] = 22;
    $nomes['Pedro'] = 24;
    $nomes['Júlia'] = 26;
    $nomes['Jorge'] = 28;

    foreach ($nomes as $nome => $idade) {
        echo $nome . ' tem ' . $idade . ' anos';
    }
}

private function createMultidimensionalArrayExamples()
{
    $nomes[0] = array('João', 18);
    $nomes[1] = array('Maria', 20);
    $nomes[2] = array('José', 22);
    $nomes[3] = array('Pedro', 24);
    $nomes[4] = array('Júlia', 26);
    $nomes[5] = array('Jorge', 28);

    foreach ($nomes as $nome) {
        echo $nome[0] . ' tem ' . $nome[1] . ' anos';
    }
}

private function createAssociativeMultidimensionalArrayExamples()
{
    $nomes[0] = array('nome' => 'João', 'idade' => 18);
    $nomes[1] = array('nome' => 'Maria', 'idade' => 20);
    $nomes[2] = array('nome' => 'José', 'idade' => 22);
    $nomes[3] = array('nome' => 'Pedro', 'idade' => 24);
    $nomes[4] = array('nome' => 'Júlia', 'idade' => 26);
    $nomes[5] = array('nome' => 'Jorge', 'idade' => 28);

    foreach ($nomes as $nome) {
        echo $nome['nome'] . ' tem ' . $nome['idade'] . ' anos';
    }
}





}
