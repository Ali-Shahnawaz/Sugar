<?php

$dependencies['rel_A']['required_Description'] = array(
    'hooks' => array("edit"),
    //Trigger formula for the dependency. Defaults to 'true'.
    'trigger' => 'true',
    'triggerFields' => array('name'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'description' => 'SetRequired', //Action type
            //The parameters passed in depend on the action type
            'params' => array(
                'target' => 'resolution',
                'label'  => 'resolution_label', //normally <field>_label
                'value' => 'equal($name, "Closed")', //Formula
            ),
        ),
    ),
);
?>
