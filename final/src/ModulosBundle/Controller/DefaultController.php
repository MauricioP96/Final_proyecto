<?php

namespace ModulosBundle\Controller;
//use ModulosBundle\Entity\Configuracion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ModulosBundle:Default:index.html.twig');
    }
}
?>