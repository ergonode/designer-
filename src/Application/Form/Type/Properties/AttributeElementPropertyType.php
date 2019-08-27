<?php

/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types = 1);

namespace Ergonode\Designer\Application\Form\Type\Properties;

use Ergonode\Designer\Application\Model\Form\Type\Property\AttributeElementPropertyTypeModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 */
class AttributeElementPropertyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'attribute_id',
                TextType::class,
                [
                    'property_path' => 'attributeId',
                ]
            )
            ->add(
                'required',
                CheckboxType::class,
                [
                    'false_values' => [
                        '0',
                        'false',
                        '',
                        false,
                    ],
                    'empty_data' => false,
                ]
            );
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AttributeElementPropertyTypeModel::class,
            'translation_domain' => 'designer',
        ]);
    }
}
