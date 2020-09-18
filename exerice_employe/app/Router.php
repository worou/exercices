<?php

require_once('./controllers/EmployeController.php');

class Router{

    private $ctremp;

    public function __construct()
    {   
        $this->ctremp = new EmployeController();
    }

    public function getUrl(){
        if(isset($_GET['action'])){
        switch ($_GET['action']) {
            case 'list_emp':
                $this->ctremp->listEmployes();
                break;
            case 'add_emp':
                $this->ctremp->addEmploye();
                break;
            default:
              
                break;
        }
    }
    }
}

