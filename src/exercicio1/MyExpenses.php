<?php

namespace aceleradev\exercicio1;

class MyExpenses
{

    protected array $despesas;
    protected string $cpf;
    protected string $nomeDoIndividuo;

    public function __construct(array $despesas, string $cpf, string $nomeDoIndividuo)
    {
        $this->despesas = $despesas;
        $this->cpf = $cpf;
        $this->nomeDoIndividuo = $nomeDoIndividuo;
    }

    public function getCpf(): string
    {

        return $this->cpf;
    }
    public function totalizaMes(int $mes)
    {

        $totalDespesasNoMes = 0;

        foreach ($this->despesas as $despesa) {
            if ($despesa->getMes() == $mes) {
                $totalDespesasNoMes += $despesa->getValor();
            }
        }
        return new DespesaMes($mes, $totalDespesasNoMes);
    }
    public function gravaInfos(DespesaMes $despesaMes)
    {

        $objSerializado = serialize($despesaMes);
        $filename = $this->nomeDoIndividuo . ".txt";
        $file = fopen($filename, "a+");
        fwrite($file, $objSerializado);
        fclose($file);
        echo "arquivo gravado com sucesso";
    }
}
