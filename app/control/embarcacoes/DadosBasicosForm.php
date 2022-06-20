<?php

class DadosBasicosForm extends TPage
{
    protected $form;
    private $formFields = [];
    private static $database = 'gestor';
    private static $activeRecord = 'Eamdadosbasicos';
    private static $primaryKey = 'id';
    private static $formName = 'form_DadosBasicosForm';

    /**
     * Form constructor
     * @param $param Request
     */
    public function __construct( $param )
    {
        parent::__construct();

        if(!empty($param['target_container']))
        {
            $this->adianti_target_container = $param['target_container'];
        }

        // creates the form
        $this->form = new BootstrapFormBuilder(self::$formName);
        // define the form title
        $this->form->setFormTitle("Dados Básicos");


        $id = new TEntry('id');
        $embarcacao = new TEntry('embarcacao');
        $empresa = new TEntry('empresa');
        $tipo_operacao = new TEntry('tipo_operacao');
        $correspondencia_classe_dea = new TEntry('correspondencia_classe_dea');
        $tipo = new TEntry('tipo');
        $tipo_1 = new TEntry('tipo_1');
        $classe = new TEntry('classe');
        $classe_1 = new TEntry('classe_1');
        $ano_de_construcao = new TEntry('ano_de_construcao');
        $ano_de_construcao_1 = new TEntry('ano_de_construcao_1');
        $porto_de_registro = new TEntry('porto_de_registro');
        $porto_de_entrega = new TEntry('porto_de_entrega');
        $bandeira = new TEntry('bandeira');
        $contrato_icj = new TEntry('contrato_icj');
        $status_do_contrato = new TEntry('status_do_contrato');
        $inicio_de_contrato = new TDate('inicio_de_contrato');
        $hora_inicio = new TTime('hora_inicio');
        $fim_de_contrato = new TDate('fim_de_contrato');
        $hora_fim = new TTime('hora_fim');
        $sap_equip = new TEntry('sap_equip');
        $cotacao_do_dolar_na_data_base_do_contrato = new TEntry('cotacao_do_dolar_na_data_base_do_contrato');
        $data_limite_para_inicio_de_operacao = new TDate('data_limite_para_inicio_de_operacao');
        $duracao_do_contrato = new TEntry('duracao_do_contrato');
        $pa_prorrogacao_automatica_d = new TEntry('pa_prorrogacao_automatica_d');
        $pa_prorrogacao_automatica_clausula = new TEntry('pa_prorrogacao_automatica_clausula');
        $n_aditivo_de_especificacao = new TEntry('n_aditivo_de_especificacao');
        $data_aditivo_de_especificacao = new TDate('data_aditivo_de_especificacao');
        $itens_alterados = new TEntry('itens_alterados');
        $mmsi = new TEntry('mmsi');
        $call_sigm_indicativo = new TEntry('call_sigm_indicativo');
        $imo = new TEntry('imo');
        $inscricao = new TEntry('inscricao');


        $id->setEditable(false);
        $fim_de_contrato->setMask('dd/mm/yyyy');
        $inicio_de_contrato->setMask('dd/mm/yyyy');
        $data_aditivo_de_especificacao->setMask('dd/mm/yyyy');
        $data_limite_para_inicio_de_operacao->setMask('dd/mm/yyyy');

        $fim_de_contrato->setDatabaseMask('yyyy-mm-dd');
        $inicio_de_contrato->setDatabaseMask('yyyy-mm-dd');
        $data_aditivo_de_especificacao->setDatabaseMask('yyyy-mm-dd');
        $data_limite_para_inicio_de_operacao->setDatabaseMask('yyyy-mm-dd');

        $imo->setMaxLength(3);
        $mmsi->setMaxLength(10);
        $tipo->setMaxLength(20);
        $tipo_1->setMaxLength(20);
        $classe->setMaxLength(20);
        $bandeira->setMaxLength(8);
        $inscricao->setMaxLength(9);
        $classe_1->setMaxLength(20);
        $sap_equip->setMaxLength(9);
        $empresa->setMaxLength(200);
        $embarcacao->setMaxLength(200);
        $tipo_operacao->setMaxLength(8);
        $contrato_icj->setMaxLength(200);
        $itens_alterados->setMaxLength(15);
        $porto_de_entrega->setMaxLength(16);
        $porto_de_registro->setMaxLength(17);
        $ano_de_construcao->setMaxLength(17);
        $status_do_contrato->setMaxLength(18);
        $ano_de_construcao_1->setMaxLength(22);
        $duracao_do_contrato->setMaxLength(19);
        $call_sigm_indicativo->setMaxLength(22);
        $n_aditivo_de_especificacao->setMaxLength(27);
        $correspondencia_classe_dea->setMaxLength(26);
        $pa_prorrogacao_automatica_d->setMaxLength(30);
        $pa_prorrogacao_automatica_clausula->setMaxLength(35);
        $cotacao_do_dolar_na_data_base_do_contrato->setMaxLength(41);

        $id->setSize(100);
        $imo->setSize('100%');
        $mmsi->setSize('100%');
        $tipo->setSize('100%');
        $hora_fim->setSize(110);
        $tipo_1->setSize('100%');
        $classe->setSize('100%');
        $empresa->setSize('100%');
        $bandeira->setSize('100%');
        $classe_1->setSize('100%');
        $hora_inicio->setSize(110);
        $sap_equip->setSize('100%');
        $inscricao->setSize('100%');
        $embarcacao->setSize('100%');
        $contrato_icj->setSize('100%');
        $fim_de_contrato->setSize(110);
        $tipo_operacao->setSize('100%');
        $inicio_de_contrato->setSize(110);
        $itens_alterados->setSize('100%');
        $porto_de_entrega->setSize('100%');
        $porto_de_registro->setSize('100%');
        $ano_de_construcao->setSize('100%');
        $status_do_contrato->setSize('100%');
        $ano_de_construcao_1->setSize('100%');
        $duracao_do_contrato->setSize('100%');
        $call_sigm_indicativo->setSize('100%');
        $n_aditivo_de_especificacao->setSize('100%');
        $data_aditivo_de_especificacao->setSize(110);
        $correspondencia_classe_dea->setSize('100%');
        $pa_prorrogacao_automatica_d->setSize('100%');
        $data_limite_para_inicio_de_operacao->setSize(110);
        $pa_prorrogacao_automatica_clausula->setSize('100%');
        $cotacao_do_dolar_na_data_base_do_contrato->setSize('100%');




        $this->form->appendPage("Dados Básicos");

        $this->form->addFields([new THidden('current_tab')]);
        $this->form->setTabFunction("$('[name=current_tab]').val($(this).attr('data-current_page'));");

        $row1 = $this->form->addFields([new TLabel("Código:", null, '14px', null, '100%'),$id]);
        $row1->layout = [' col-sm-6 col-lg-12 col-xl-12'];

        $row2 = $this->form->addFields([new TLabel("Embarcação:", null, '14px', null, '100%'),$embarcacao],[new TLabel("Empresa:", null, '14px', null, '100%'),$empresa]);
        $row2->layout = [' col-sm-6',' col-sm-6'];

        $row3 = $this->form->addFields([new TLabel("Tipo de Operação:", null, '14px', null, '100%'),$tipo_operacao],[new TLabel("Correspondencia classe dea:", null, '14px', null, '100%'),$correspondencia_classe_dea]);
        $row3->layout = ['col-sm-6','col-sm-6'];

        $row4 = $this->form->addFields([new TLabel("Tipo da Embarcação (Contratado):", null, '14px', null, '100%'),$tipo],[new TLabel("Tipo da Embarcação (Ofertado):", null, '14px', null, '100%'),$tipo_1]);
        $row4->layout = ['col-sm-6','col-sm-6'];

        $row5 = $this->form->addFields([new TLabel("Classe (Contratado):", null, '14px', null, '100%'),$classe],[new TLabel("Classe (Ofertado):", null, '14px', null, '100%'),$classe_1]);
        $row5->layout = ['col-sm-6','col-sm-6'];

        $row6 = $this->form->addFields([new TLabel("Ano de construção (Contratado):", null, '14px', null, '100%'),$ano_de_construcao],[new TLabel("Ano de construção (Ofertado):", null, '14px', null, '100%'),$ano_de_construcao_1]);
        $row6->layout = ['col-sm-6','col-sm-6'];

        $row7 = $this->form->addFields([new TLabel("Porto de registro:", null, '14px', null, '100%'),$porto_de_registro],[new TLabel("Porto de entrega:", null, '14px', null, '100%'),$porto_de_entrega]);
        $row7->layout = ['col-sm-6','col-sm-6'];

        $row8 = $this->form->addFields([new TLabel("Bandeira:", null, '14px', null, '100%'),$bandeira]);
        $row8->layout = ['col-sm-6'];

        $this->form->appendPage("Dados do Contrato");
        $row9 = $this->form->addFields([new TLabel("Contrato (ICJ):", null, '14px', null, '100%'),$contrato_icj],[new TLabel("Status Contrato:", null, '14px', null, '100%'),$status_do_contrato]);
        $row9->layout = ['col-sm-6','col-sm-6'];

        $row10 = $this->form->addFields([new TLabel("Início de Contrato:", null, '14px', null, '100%'),$inicio_de_contrato],[new TLabel("Hora inicio:", null, '14px', null, '100%'),$hora_inicio]);
        $row10->layout = ['col-sm-6','col-sm-6'];

        $row11 = $this->form->addFields([new TLabel("Fim de contrato:", null, '14px', null, '100%'),$fim_de_contrato],[new TLabel("Hora Fim:", null, '14px', null, '100%'),$hora_fim]);
        $row11->layout = ['col-sm-6','col-sm-6'];

        $row12 = $this->form->addFields([new TLabel("Sap equip:", null, '14px', null, '100%'),$sap_equip],[]);
        $row12->layout = ['col-sm-6',' col-sm-6'];

        $row13 = $this->form->addFields([new TLabel("Cotação do Dolar na Base do Contrato:", null, '14px', null, '100%'),$cotacao_do_dolar_na_data_base_do_contrato],[new TLabel("Data limite para inicio de operacao:", null, '14px', null, '100%'),$data_limite_para_inicio_de_operacao]);
        $row13->layout = ['col-sm-6','col-sm-6'];

        $row14 = $this->form->addFields([new TLabel("Duracao do contrato:", null, '14px', null, '100%'),$duracao_do_contrato],[new TLabel("Pa prorrogacao automatica d:", null, '14px', null, '100%'),$pa_prorrogacao_automatica_d]);
        $row14->layout = ['col-sm-6','col-sm-6'];

        $row15 = $this->form->addFields([new TLabel("Pa prorrogacao automatica clausula:", null, '14px', null, '100%'),$pa_prorrogacao_automatica_clausula],[new TLabel("N aditivo de especificacao:", null, '14px', null, '100%'),$n_aditivo_de_especificacao]);
        $row15->layout = ['col-sm-6','col-sm-6'];

        $row16 = $this->form->addFields([new TLabel("Data aditivo de especificacao:", null, '14px', null, '100%'),$data_aditivo_de_especificacao],[new TLabel("Itens alterados:", null, '14px', null, '100%'),$itens_alterados]);
        $row16->layout = ['col-sm-6','col-sm-6'];

        $this->form->appendPage("Dados de Comunicação");
        $row17 = $this->form->addFields([new TLabel("Mmsi:", null, '14px', null, '100%'),$mmsi],[new TLabel("Call sigm indicativo:", null, '14px', null, '100%'),$call_sigm_indicativo]);
        $row17->layout = ['col-sm-6','col-sm-6'];

        $row18 = $this->form->addFields([new TLabel("Imo:", null, '14px', null, '100%'),$imo],[new TLabel("Inscricao:", null, '14px', null, '100%'),$inscricao]);
        $row18->layout = ['col-sm-6','col-sm-6'];

        // create the form actions
        $btn_onsave = $this->form->addAction("Salvar", new TAction([$this, 'onSave']), 'fas:save #ffffff');
        $this->btn_onsave = $btn_onsave;
        $btn_onsave->addStyleClass('btn-primary'); 

        $btn_onclear = $this->form->addAction("Limpar formulário", new TAction([$this, 'onClear']), 'fas:eraser #dd5a43');
        $this->btn_onclear = $btn_onclear;

        $btn_onshow = $this->form->addAction("Voltar", new TAction(['DadosBasicosHeaderList', 'onShow']), 'fas:arrow-left #000000');
        $this->btn_onshow = $btn_onshow;

        parent::setTargetContainer('adianti_right_panel');

        $btnClose = new TButton('closeCurtain');
        $btnClose->class = 'btn btn-sm btn-default';
        $btnClose->style = 'margin-right:10px;';
        $btnClose->onClick = "Template.closeRightPanel();";
        $btnClose->setLabel("Fechar");
        $btnClose->setImage('fas:times');

        $this->form->addHeaderWidget($btnClose);

        parent::add($this->form);

    }

    public function onSave($param = null) 
    {
        try
        {
            TTransaction::open(self::$database); // open a transaction

            $messageAction = null;

            $this->form->validate(); // validate form data

            $object = new Eamdadosbasicos(); // create an empty object 

            $data = $this->form->getData(); // get form data as array
            $object->fromArray( (array) $data); // load the object with data

            $object->store(); // save the object 

            $loadPageParam = [];

            if(!empty($param['target_container']))
            {
                $loadPageParam['target_container'] = $param['target_container'];
            }

            // get the generated {PRIMARY_KEY}
            $data->id = $object->id; 

            $this->form->setData($data); // fill form data
            TTransaction::close(); // close the transaction

            TToast::show('success', "Registro salvo", 'topRight', 'far:check-circle');
            TApplication::loadPage('DadosBasicosHeaderList', 'onShow', $loadPageParam); 

                        TScript::create("Template.closeRightPanel();"); 
        }
        catch (Exception $e) // in case of exception
        {
            //</catchAutoCode> 

            new TMessage('error', $e->getMessage()); // shows the exception error message
            $this->form->setData( $this->form->getData() ); // keep form data
            TTransaction::rollback(); // undo all pending operations
        }
    }

    public function onEdit( $param )
    {
        try
        {
            if (isset($param['key']))
            {
                $key = $param['key'];  // get the parameter $key
                TTransaction::open(self::$database); // open a transaction

                $object = new Eamdadosbasicos($key); // instantiates the Active Record 

                $this->form->setData($object); // fill the form 

                TTransaction::close(); // close the transaction 
            }
            else
            {
                $this->form->clear();
            }
        }
        catch (Exception $e) // in case of exception
        {
            new TMessage('error', $e->getMessage()); // shows the exception error message
            TTransaction::rollback(); // undo all pending operations
        }
    }

    /**
     * Clear form data
     * @param $param Request
     */
    public function onClear( $param )
    {
        $this->form->clear(true);

    }

    public function onShow($param = null)
    {

    } 

}

