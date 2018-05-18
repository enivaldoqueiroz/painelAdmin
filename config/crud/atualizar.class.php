<?php

/**
 * Classe responsavel por fazer a atualização dos dados no banco de dados
 */


 class atualizar extends conecta {

    private $Upadate;
    private $Resultados;
    private $Up;
    private $Conecta;

    public function Query( $Tabela, $Dados, $Termos) {
           


        $this->Update = "UPDATE {$Tabela} SET {$Dados} {$Termos}";
        $this->Conecta = parent::Conn();
        $this->Up = $this->Conecta->prepare ($this->Update);
        $this->Up -> setFetchMode (PDO:: FETCH_ASSOC);

        try{
            $this->Up->execute();
            $this->Resultados = $this->Up->rowCount();
            
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