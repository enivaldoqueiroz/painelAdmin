<?php

/**
 * Classe responsavel por fazer leituras no banco de dados
 */


 class criar extends conecta {

    private $Insert;
    private $Resultados;
    private $Criar;
    private $Conecta;

    public function Query( $Tabela, $Colunas, $Valor ) {

         

        $this->Insert = "INSERT INTO {$Tabela} ({$Colunas}) VALUES ({$Valor})";
        $this->Conecta = parent::Conn();
        $this->Criar = $this->Conecta->prepare ($this->Insert);
        $this->Criar -> setFetchMode (PDO:: FETCH_ASSOC);

        try{
            $this->Criar->execute();
            $this->Resultados = $this->Conecta->lastInsertId();
            
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