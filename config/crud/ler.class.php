<?php

/**
 * Classe responsavel por fazer leituras no banco de dados
 */


 class ler extends conecta {

    private $Select;
    private $Resultados;
    private $Ler;
    private $Conecta;

    public function Query( $Tabela, $termos = null) {
        $this->Select = "SELECT * FROM {$Tabela} {$termos}";
        $this->Conecta = parent::Conn();
        $this->Ler = $this->Conecta->prepare ($this->Select);
        $this->Ler -> setFetchMode (PDO:: FETCH_ASSOC);

        try{
            $this->Ler->execute();
            $this->Resultados = $this->Ler->fetchAll();
            
        }catch (PDOExeception $e){
            $this->Resultados = null;
            echo $e->getMessage();
        }
    }

    /** Retorna os Resultados e, Array */
    public function getResultados() {
        return $this->Resultados;
    }
 }