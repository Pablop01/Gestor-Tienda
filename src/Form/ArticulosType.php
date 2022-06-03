<?php

namespace App\Form;

use App\Entity\Articulos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ArticulosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('precio_base', NumberType::class)
            ->add('iva', ChoiceType::class, [
                'choices' => [
                    '21%' => '21',
                    '10%' => '10',
                    '4%' => '4'
                ]
            ])
            ->add('stock')
            ->add('Foto', FileType::class,  [
                'required'   => true,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/*',
                        ],
                    ]),
                ]
            ])
            ->add('save', SubmitType::class, array('label' => 'Registrar Articulo'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Articulos::class,
        ]);
    }
}
