<?php

class Twig_Extensions_Extension_Layout extends Twig_Extension
{
    public function getFunctions()
    {
    	//not even close to a moose
        return array(
            'desktop' => new Twig_Function_Function('desktopLayout'),
        );
    }

    public function getName()
    {
        return 'Layout';
    }
}

?>