<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        $finder = new Finder;
        
        $dir1 = "/home/raouf/Downloads/Symfony/web/bundles/webprofiler";
        $dir2 = "/home/raouf/Downloads/Symfony/web/bundles/acmedemo";
        $finder->in($dir1);

        foreach($finder as $f) {
            echo $f->getRelativePathname()."<br />";
        }
        exit;
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        //return $this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }
}
