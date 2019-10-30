<?php
//For top section Heading
vc_map(array(
    'name' => __('Top Heading', 'industrious'),
    'description' => __('This for top heading sectiong', 'industrious'),
    'base' => 't_heading',
    'category' => 'Industrious',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
            'param_name' => __('t_heading', 'industrious'),
            'type' => 'textfield',
            'heading' => __('This for heading', 'industrious'),
        ),
        array(
            'param_name' => __('t_desc', 'industrious'),
            'type' => 'textarea',
            'heading' => __('This for description', 'industrious'),
        ),
    ),
));

//For iconbox with text
vc_map(array(
    'name' => __('Iconbox With Text', 'industrious'),
    'description' => __('This for our iconbox', 'industrious'),
    'base' => 'iconbox',
    'category' => 'Industrious',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
            'param_name' => __('icon_icon', 'industrious'),
            'type' => 'iconpicker',
            'heading' => __('This for Heading', 'industrious'),
        ),
        array(
            'param_name' => __('icon_heiding', 'industrious'),
            'type' => 'textfield',
            'heading' => __('This for heading', 'industrious'),
        ),
        array(
            'param_name' => __('icon_desc', 'industrious'),
            'type' => 'textarea',
            'heading' => __('This for description', 'industrious'),
        ),
    ),
));

//For middle section Heading
vc_map(array(
    'name' => __('Middle Heading', 'industrious'),
    'description' => __('This for middle heading sectiong', 'industrious'),
    'base' => 'm_heading',
    'category' => 'Industrious',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
            'param_name' => __('m_heading', 'industrious'),
            'type' => 'textfield',
            'heading' => __('This for heading', 'industrious'),
        ),
        array(
            'param_name' => __('m_desc', 'industrious'),
            'type' => 'textarea',
            'heading' => __('This for description', 'industrious'),
        ),
    ),
));

//For bottom section Heading
vc_map(array(
    'name' => __('Bottom Heading', 'industrious'),
    'description' => __('This for bottom heading sectiong', 'industrious'),
    'base' => 'b_heading',
    'category' => 'Industrious',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
            'param_name' => __('b_heading', 'industrious'),
            'type' => 'textfield',
            'heading' => __('This for heading', 'industrious'),
        ),
        array(
            'param_name' => __('b_desc', 'industrious'),
            'type' => 'textarea',
            'heading' => __('This for description', 'industrious'),
        ),
    ),
));

// For team section
vc_map(array(
    'name'          =>      __('Team','astrum'),
    'description'   =>      'This is for team section',
    'base'          =>      'team',
    'category'      =>      'Industrious',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'team_m',
            'type'          =>  'textfield',
            'heading'       =>  'Post per page'

        ),
    )
));

// For generic page section
vc_map(array(
    'name'          =>      __('Generic','astrum'),
    'description'   =>      'This is for generic page section',
    'base'          =>      'generic',
    'category'      =>      'Industrious',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'heading_one',
            'type'          =>  'textfield',
            'heading'       =>  'Tpye your heading one'
        ),
        array(
            'param_name'    =>  'text_one',
            'type'          =>  'textarea',
            'heading'       =>  'Tpye your text one'
        ),
        array(
            'param_name'    =>  'heading_two',
            'type'          =>  'textfield',
            'heading'       =>  'Tpye your heading two'
        ),
        array(
            'param_name'    =>  'text_two',
            'type'          =>  'textarea',
            'heading'       =>  'Tpye your text two'
        ),
    )
));