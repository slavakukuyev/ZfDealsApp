<?php

namespace ZfDeals\Form;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilterProviderInterface;

class ProductFieldset extends Fieldset implements InputFilterProviderInterface {

    public function __construct() {
        parent::__construct('product');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'ID of product:',
            )
        ));


        $this->add(array(
            'name' => 'name',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Name of Product:',
            )
        ));

        $this->add(array(
            'name' => 'stock',
            'attributes' => array(
                'type' => 'number',
            ),
            'options' => array(
                'label' => '# Count:'
            ),
        ));
    }

    public function getInputFilterSpecification() {
        return array(
            'id' => array(
                'required' => true,
                'filters' => array(
                    array(
                        'name' => 'StringTrim'
                    )
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'message' =>
                            "Please enter ProductId."
                        )
                    )
                )
            ),
            'name' => array(
                'required' => true,
                'filters' => array(
                    array(
                        'name' => 'StringTrim'
                    )
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'message' =>
                            "Please enter Product Name."
                        ),
                    )
                )
            ),
            'stock' => array(
                'required' => true,
                'filters' => array(
                    array(
                        'name' => 'StringTrim'
                    )
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'message' =>
                            "Please enter count"
                        )
                    ),
                    array(
                        'name' => 'Digits',
                        'options' => array(
                            'message' =>
                            "Please enter Integer."
                        )
                    ),
                    array(
                        'name' => 'GreaterThan',
                        'options' => array(
                            'min' => 0,
                            'message' =>
                            "Please enter int equal/greater than zero."
                        )
                    )
                )
            )
        );
    }

}