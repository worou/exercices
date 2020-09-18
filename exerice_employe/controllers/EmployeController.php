<?php
require_once('./models/EmployeModel.php');

class EmployeController{
    
    private $model; 

    public function __construct()
    {
        $this->model = new EmployeModel();
    }

    public function listEmployes(){
        $rows = $this->model->getEmployes();
        require_once('./views/listItems.php');
    }

    public function addEmploye(){
        if(isset($_POST['soumis'])){
            $nom= trim(addslashes(htmlentities($_POST['nom'])));
            $prenom= trim(addslashes(htmlentities($_POST['prenom'])));
            $adresse= trim(addslashes(htmlentities($_POST['adresse'])));
            $salaire=(int)trim(addslashes(htmlentities($_POST['salaire'])));
            $age=(int)trim(addslashes(htmlentities($_POST['age'])));
            $description=trim(addslashes(htmlentities($_POST['description'])));

            $employe = new Employe();

            $employe->setNom($nom);
            $employe->setPrenom($prenom);
            $employe->setAdresse($adresse);
            $employe->setAge($age);
            $employe->setSalaire($salaire);
            $employe->setDescription($description);

            $res = $this->model->insertEmploye($employe );

            if($res){
                header('location:index.php?action=list_emp');
            }
        }
        require_once('./views/addform.php');

    }
}
