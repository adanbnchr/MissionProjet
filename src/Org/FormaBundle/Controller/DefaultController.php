<?php

namespace Org\FormaBundle\Controller;
use Acme\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/truc/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    /**
     * @Route("/formulaire")
     * @Template()
     */
    public function formulaireAction(Request $request)
    {
        $task = new Task();
        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->getForm();
        return array('form' => $form->createView());
    }
    /**
     * @Route("/accueil")
     * @Template()
     */
    public function accueilAction(){
        if(isset($_POST["cardGrp"])){
            echo $_POST["personnes"];
        /*require_once 'JsonPartition.php';

        if (empty($_POST['cardGrp'])) :
        echo '{}';
        exit();
        endif;

        $card = $_POST['cardGrp'] + 0;
        $personnes = explode("\n", $_POST['personnes']);

        if (!is_numeric($card) || !$personnes || $card <= 0):
        echo '{}';
        exit();
        endif;

        $partionneur = new JsonPartition($card, $personnes);
        echo $partionneur->getJson();*/
        
        }
        return array();
    }
}
