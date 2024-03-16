 
 <?php 
  
 class TODO {
public $titre,$description ,$categorie ;

public function __construct($titre,$description ,$categorie)
{
    $this->titre = $titre ;
    $this->description = $description ;
    $this->categorie = $categorie ;
}
 }

 class TODOList {
    public $list ;

    public function __construct()
    {
        $this->addsomeTODO();    
    }

    public function add($todo)
    {
        $this->list[]=$todo ;     
    }

    public function addsomeTODO()
    {
        $this->add(new TODO('reparer voiture', 'passer demain au mecanicien pour changer les bougies','urgente'));  
        $this->add(new TODO('visiter banque', 'passer cette semaine a la banque pour faire un virement','normale'));  
        $this->add(new TODO('shopping', 'chercher une chossure a ABC, couleur noire, taille 42','secondaire'));  
        $this->add(new TODO('finir projet', 'finir le projet du cours I3302 avant demain','urgente'));  
        $this->add(new TODO('prendre le dejeuner', 'prendre le dejeuner avec mes amis','normale'));  
        $this->add(new TODO('recharger mobile', 'passer avant demain chez Alfa pour recharge','urgente'));  
    }

    public function getTODOByCategory($categoryName)         
    {
     if($categoryName == 'all')
       return $this->list  ; 
       
       for($i=0 ; $i <count($this->list) ; $i++){
           if($this->list[$i]->categorie == $categoryName)
             $result[]= $this->list[$i];     }
 return $result ;
    }



    public function delTODO($index)  {

    unset($this->list[$index]);  
    $this->list = array_values($this->list) ; 
    }




    public function getTODO($index)
    {
   return  $this->list[$index];
    }

    public function updateTODO($index, $todo)
    {
    $this->list[$index]->titre = $todo->titre ;
    $this->list[$index]->description = $todo->description ;
    $this->list[$index]->categorie = $todo->categorie ;
 
    }


     }
    

 
 ?>
 