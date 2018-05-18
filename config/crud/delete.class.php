<?php

/**
 * Classe responsavel por fazer a exclusão de dados no banco de dados
 */


 class delete extends conecta {

    private $Delete;
    private $Resultados;
    private $Del;
    private $Conecta;

    public function Query( $Tabela, $Termos) {        
         
        $this->Delete = "DELETE FROM {$Tabela} {$Termos}";
        $this->Conecta = parent::Conn();
        $this->Del = $this->Conecta->prepare ($this->Delete);
        $this->Del -> setFetchMode (PDO:: FETCH_ASSOC);

        try{
            $this->Del->execute();
            $this->Resultados = $this->Del->rowCount();
            
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