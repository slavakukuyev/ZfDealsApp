<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'ZfDeals\Controller\Admin'
            => 'ZfDeals\Controller\AdminController'
        ),
    ),
    'router' => array(
        'routes' => array(
            'zf-deals\admin\home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/deals/admin',
                    'defaults' => array(
                        'controller'
                        => 'ZfDeals\Controller\Admin',
                        'action'
                        => 'index',
                    ),
                ),
            ),
            'zf-deals\admin\product\add' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/deals/admin/product/add',
                    'defaults' => array(
                        'controller'
                        => 'ZfDeals\Controller\Admin',
                        'action'
                        => 'add-product',
                    )
                )
            )
        )
    ),
    'view_manager' => array(
        'template_map' => array(
            '/zf-deals/layout/admin' => __DIR__ . '/../view/layout/admin.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);