<?php
namespace App\Form\Type;

use App\Form\Type\FileImgFormType;
use App\Entity\Actualite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ActualiteFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('titre')
            ->add('description', TextareaType::class, array(
                'label' => 'Description',
                'required'      => false,
            ))
            ->add('source')
            ->add('imgDoc', FileImgFormType::class, array(
                'label' => "Image",
                'required' => true
            ));

        ;
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use($options) {
            $dossier = $event->getData(); //recuperation de l'objet sur lequel le formulaire se base
            $form = $event->getForm(); //recuperation du formulaire
            if (null === $dossier->getId()) {
                $form->add('save', SubmitType::class, array(
                    'label' => 'Enregistrer',
                    'attr' => array(
                        'class' => 'btn btn-success btn-sm'
                    )
                ));
            }else {
            $form->add('edit', SubmitType::class, array(
                    'label' => 'Modifier',
                    'attr' => array(
                        'class' => 'btn btn-success btn-sm'
                    )
                ));
            }
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Actualite::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_actualite';
    }


}
