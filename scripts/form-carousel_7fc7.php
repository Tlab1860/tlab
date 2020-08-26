<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => '티랩.com 홈페이지 문의',
    'email_message' => '문의',
    'success_redirect' => '',
    'email' => array(
        'from' => 'tlab1860@gmail.com',
        'to' => 'tlab1860@gmail.com'
    ),
    'fields' => array(
        'name' => array(
            'order' => 1,
            'type' => 'string',
            'label' => 'Name',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Name\' is required.'
            )
        ),
        'phone' => array(
            'order' => 2,
            'type' => 'tel',
            'label' => 'phone',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'phone\' is required.'
            )
        ),
        'email' => array(
            'order' => 3,
            'type' => 'email',
            'label' => 'Email',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Email\' is required.'
            )
        ),
        'message' => array(
            'order' => 4,
            'type' => 'string',
            'label' => 'Message',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Message\' is required.'
            )
        ),
    )
);

$processor = new FormProcessor();
$processor->process($form);

?>