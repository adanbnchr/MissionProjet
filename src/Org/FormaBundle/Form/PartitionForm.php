<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Org\FormaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


/**
 * Description of PartitionForm
 *
 * @author sio
 */
class PartitionForm extends \Symfony\Component\Form\AbstractType{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder->add('motcle', 'text');
    }
    
    public function getName()
    {        
        return 'acteurrecherche';
    }
}
