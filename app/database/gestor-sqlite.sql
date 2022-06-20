PRAGMA foreign_keys=OFF; 

CREATE TABLE EAMDadosBasicos( 
      id  INTEGER    NOT NULL  , 
      embarcacao varchar  (200)   , 
      empresa varchar  (200)   , 
      status_do_contrato varchar  (18)   , 
      tipo_operacao varchar  (8)   , 
      correspondencia_classe_dea varchar  (26)   , 
      tipo varchar  (20)   , 
      tipo_1 varchar  (20)   , 
      classe varchar  (20)   , 
      classe_1 varchar  (20)   , 
      contrato_icj varchar  (200)   , 
      inicio_de_contrato date   , 
      hora_inicio text  (7)   , 
      fim_de_contrato date   , 
      hora_fim text  (7)   , 
      sap_equip varchar  (9)   , 
      cotacao_do_dolar_na_data_base_do_contrato varchar  (41)   , 
      data_limite_para_inicio_de_operacao date   , 
      duracao_do_contrato varchar  (19)   , 
      pa_prorrogacao_automatica_d varchar  (30)   , 
      pa_prorrogacao_automatica_clausula varchar  (35)   , 
      n_aditivo_de_especificacao varchar  (27)   , 
      data_aditivo_de_especificacao date   , 
      itens_alterados varchar  (15)   , 
      imo varchar  (3)   , 
      inscricao varchar  (9)   , 
      bandeira varchar  (8)   , 
      ano_de_construcao varchar  (17)   , 
      excecao_contr_br varchar  (16)   , 
      ano_de_construcao_1 varchar  (22)   , 
      porto_de_registro varchar  (17)   , 
      porto_de_entrega varchar  (16)   , 
      mmsi varchar  (10)   , 
      call_sigm_indicativo varchar  (22)   , 
 PRIMARY KEY (id)) ; 

 
 
  
