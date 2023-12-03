<?php

namespace app\controllers;

use core\App;
use app\forms\Data;
use core\ParamUtils;
use core\Utils;

class CreditCalcController {
    private $data;
    private $result;

    public function __construct() {
        $this->data = new Data();
    }
    
    public function action_start() {   
        $this->generateView();  
    }
    
    public function action_calc() {
        $this->data->kwota = ParamUtils::getFromRequest('kwota');
        $this->data->opr = ParamUtils::getFromRequest('opr');
        $this->data->okres = ParamUtils::getFromRequest('okres');

        if($this->isValid()) {
            $this->oblicz();
        }

        $this->generateView();
    }

    private function isValid() {
        if (empty($this->data->kwota)) {
            Utils::addErrorMessage('Kwota kredytu nie została podana');
        }
        if (empty($this->data->opr)) {
            Utils::addErrorMessage('Oprocentowanie kredytu nie zostało podane');
        }
        if (empty($this->data->okres)) {
            Utils::addErrorMessage('Długość trwania kredytu nie została podana');
        }
        if (App::getMessages()->isError()){
            return false;
        }
        if (! is_numeric($this->data->kwota)) {
            Utils::addErrorMessage('Podana kwota kredytu jest nieprawidłowa');
        }
        if (! is_numeric($this->data->opr)) {
            Utils::addErrorMessage('Podane oprocentowanie kredytu jest nieprawidłowe');
        }
        if (! is_numeric($this->data->okres)) {
            Utils::addErrorMessage('Podana długość kredytu jest nieprawidłowa');
        }

        return !App::getMessages()->isError();
    }

    private function oblicz() {
        $kwota = intval($this->data->kwota);
	    $oprocnetowanie = intval($this->data->opr);
	    $okres = intval($this->data->okres);

	    if ($kwota <= 0) {
            Utils::addErrorMessage('Kwota kredytu nie może być ujemna');
	    }
	
	    if ($oprocnetowanie <= 0 || $oprocnetowanie >= 100) {
            Utils::addErrorMessage('Oprocentowanie musi być od 0 do 100');
	    }
	
	    if ($okres <= 0) {
            Utils::addErrorMessage('Ilość miesięcy kredytu musi być większa od 0');
	    }
        if (App::getMessages()->isError()){
            return;
        }
        
        $this->result = ($kwota + ($kwota * ($oprocnetowanie * $okres) / 100)) / ($okres * 12);

        Utils::addInfoMessage('Parametry zostały przekazane');
        Utils::addInfoMessage('Parametry są poprawne. Obliczenia zostaną wykonane');

        App::getSmarty()->assign("result", $this->result);
    }

    private function generateView() {
        App::getSmarty()->assign("data", $this->data);
        App::getSmarty()->display("Calculator.tpl"); 
    }
}