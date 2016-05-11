<?php

namespace ModulosBundle\Controller;
use ModulosBundle\Entity\Configuracion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class LoginController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        if(!empty($session->get('nombreusuario'))){
            return $this->redirect($this->generateUrl('homepage'));///////completar con lo q falta cuando haga la parte de logueado
        }
        $conf = $this->getDoctrine()
        ->getRepository('ModulosBundle:Configuracion')
        ->find(1);
        if($conf->getHabilitada()){
        return $this->render('ModulosBundle:Login:index.html.twig',array(
            'titulo' => $conf->getTitulo(),
            'descripcion'=>$conf->getDescripcion(),
            'contacto'=>$conf->getMailContacto()));
        }
        else{
        	return $this->render('ModulosBundle:Login:indexEnable.html.twig',array(
            'titulo' => $conf->getTitulo(),
            'mensaje'=>$conf->getTextodeshab(),
             'contacto'=>$conf->getMailContacto()));
        }
        
        
        
        
        
        
    }
}
?>