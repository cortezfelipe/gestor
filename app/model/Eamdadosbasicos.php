<?php

class Eamdadosbasicos extends TRecord
{
    const TABLENAME  = 'EAMDadosBasicos';
    const PRIMARYKEY = 'id';
    const IDPOLICY   =  'serial'; // {max, serial}

    

    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('embarcacao');
        parent::addAttribute('empresa');
        parent::addAttribute('status_do_contrato');
        parent::addAttribute('tipo_operacao');
        parent::addAttribute('correspondencia_classe_dea');
        parent::addAttribute('tipo');
        parent::addAttribute('tipo_1');
        parent::addAttribute('classe');
        parent::addAttribute('classe_1');
        parent::addAttribute('contrato_icj');
        parent::addAttribute('inicio_de_contrato');
        parent::addAttribute('hora_inicio');
        parent::addAttribute('fim_de_contrato');
        parent::addAttribute('hora_fim');
        parent::addAttribute('sap_equip');
        parent::addAttribute('cotacao_do_dolar_na_data_base_do_contrato');
        parent::addAttribute('data_limite_para_inicio_de_operacao');
        parent::addAttribute('duracao_do_contrato');
        parent::addAttribute('pa_prorrogacao_automatica_d');
        parent::addAttribute('pa_prorrogacao_automatica_clausula');
        parent::addAttribute('n_aditivo_de_especificacao');
        parent::addAttribute('data_aditivo_de_especificacao');
        parent::addAttribute('itens_alterados');
        parent::addAttribute('imo');
        parent::addAttribute('inscricao');
        parent::addAttribute('bandeira');
        parent::addAttribute('ano_de_construcao');
        parent::addAttribute('excecao_contr_br');
        parent::addAttribute('ano_de_construcao_1');
        parent::addAttribute('porto_de_registro');
        parent::addAttribute('porto_de_entrega');
        parent::addAttribute('mmsi');
        parent::addAttribute('call_sigm_indicativo');
            
    }

    
}

