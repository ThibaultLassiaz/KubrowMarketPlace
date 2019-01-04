<?php declare(strict_types = 1);

namespace App\Form\Type;

use App\Entity\Kubrow;
use App\Entity\KubrowBuild;
use App\Entity\KubrowColor;
use App\Entity\KubrowEnergy;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneratorSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('primary_color', EntityType::class, [
                'label' => 'Primary Color',
                'class' => KubrowColor::class,
                'required' => true,
            ])
            ->add('secondary_color', EntityType::class, [
                'label' => 'Secondary Color',
                'class' => KubrowColor::class,
                'required' => true,
            ])
            ->add('tertiary_color', EntityType::class, [
                'label' => 'Tertiary Color',
                'class' => KubrowColor::class,
                'required' => true,
            ])
            ->add('build', EntityType::class, [
                'label' => 'Build',
                'class' => KubrowBuild::class,
                'required' => true,
            ])
            ->add('breed_1', EntityType::class, [
                'label' => 'Breed 1',
                'class' => KubrowBuild::class,
            ])
            ->add('breed_2', EntityType::class, [
                'label' => 'Breed 2',
                'class' => KubrowBuild::class,
            ])
            ->add('energy_color', EntityType::class, [
                'label' => 'Energy color',
                'class' => KubrowEnergy::class,
            ])
            ->add('search', SubmitType::class, [
                'label' => 'Search',
                'attr' => ['class' => 'btn btn-primary btn-lg']
            ]);
    }
}
