<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Planner\Bundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class objetivoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', 'nombre');
        $builder->add('descripcicion', 'descripcion');
        $builder->add('deadLine', 'Fecha límite');
        $builder->add('body', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}
?>
