<?php
// src/rj/StreamBundle/Admin/EpisodeAdmin.php
namespace rj\StreamBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EpisodeAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('saison', 'text')
            ->add('episode', 'text')
            ->add('titre', 'text')
            ->add('description', 'textarea')
            ->add('lien', 'text')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                                    )
                ))

            ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('saison')
                ->add('episode');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('saison', 'text')
            ->add('episode', 'text')
            ->add('titre', 'text')
            ->add('description', 'textarea')
            ->add('lien', 'text');

    }
}