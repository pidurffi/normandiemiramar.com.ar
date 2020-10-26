<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contacto;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("AppBundle:Sitio:home.html.twig")
     */
    public function indexAction(Request $request)
    {
    	$galeria = $this->getDoctrine()->getRepository('AppBundle:Galeria')->find(1);
    	return array('galeria'=>$galeria);
    }
    
    /**
     * @Template("AppBundle:Sitio:component_promociones.html.twig")
     */
    public function promocionesAction(Request $request) {
    
    	$promociones = $this->getDoctrine()->getRepository('AppBundle:Promocion')->find4Site(3);
    	return array('promociones'=>$promociones);
    	
    }
    
    /**
     * @Template("AppBundle:Sitio:component_galeria.html.twig")
     */
    public function galeriaAction(Request $request,$galeria_id=0) {
    
    	if(empty($galeria_id)) $galerias = $this->getDoctrine()->getRepository('AppBundle:Galeria')->findAll();
    	else  $galerias = array($this->getDoctrine()->getRepository('AppBundle:Galeria')->find($galeria_id));
    	
    	return array('galerias'=>$galerias);
    	
    }

    /**
     * @Template("AppBundle:Sitio:component_galeria_default.html.twig")
     */
    public function galeriaDefaultAction(Request $request,$galeria_id=0) {
    
    	if(empty($galeria_id)) $galerias = $this->getDoctrine()->getRepository('AppBundle:Galeria')->findAll();
    	else  $galerias = array($this->getDoctrine()->getRepository('AppBundle:Galeria')->find($galeria_id));
    	
    	return array('galerias'=>$galerias);
    	
    }

    /**
     * @Route("/", name="home")
     * @Template("AppBundle:Sitio:home.html.twig")
     */
    public function homeAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/habitaciones", name="habitaciones")
     * @Template("AppBundle:Sitio:habitaciones.html.twig")
     */
    public function habitacionesAction(Request $request)
    {
        return array();
    }


    /**
     * @Template("AppBundle:Sitio:component_infohabitaciones.html.twig")
     */
    public function infohabitacionesAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/habitacion-doble", name="habitacion-doble")
     * @Template("AppBundle:Sitio:habitacion-doble.html.twig")
     */
    public function habitacionDobleAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/habitacion-triple-estandar", name="habitacion-triple-estandar")
     * @Template("AppBundle:Sitio:habitacion-triple-estandar.html.twig")
     */
    public function habitacionTripleEstandarAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/habitacion-triple-luxe", name="habitacion-triple-luxe")
     * @Template("AppBundle:Sitio:habitacion-triple-luxe.html.twig")
     */
    public function habitacionTripleLuxeAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/habitacion-cuadruple-estandar", name="habitacion-cuadruple-estandar")
     * @Template("AppBundle:Sitio:habitacion-cuadruple-estandar.html.twig")
     */
    public function habitacionCuadrupleEstandarAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/habitacion-cuadruple-superior", name="habitacion-cuadruple-superior")
     * @Template("AppBundle:Sitio:habitacion-cuadruple-superior.html.twig")
     */
    public function habitacionCuadrupleSuperiorAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/departamento-para-5-personas", name="departamento")
     * @Template("AppBundle:Sitio:departamento.html.twig")
     */
    public function departamentoAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/departamento-para-6-personas", name="departamento6")
     * @Template("AppBundle:Sitio:departamento6.html.twig")
     */
    public function departamento6Action(Request $request)
    {
        return array();
    }

    /**
     * @Route("/estudio", name="estudio")
     * @Template("AppBundle:Sitio:estudio.html.twig")
     */
    public function estudioAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/monoambiente-4-personas", name="monoambiente-4-personas")
     * @Template("AppBundle:Sitio:monoambiente-4-personas.html.twig")
     */
    public function monoambiente4PersonasAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/servicios", name="servicios")
     * @Template("AppBundle:Sitio:servicios.html.twig")
     */
    public function serviciosAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-historia", name="miramar-historia")
     * @Template("AppBundle:Sitio:miramar-historia.html.twig")
     */
    public function miramarHistoriaAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-fotos", name="miramar-fotos")
     * @Template("AppBundle:Sitio:miramar-fotos.html.twig")
     */
    public function miramarFotosAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares", name="miramar-lugares")
     * @Template("AppBundle:Sitio:miramar-lugares.html.twig")
     */
    public function miramarLugaresAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-aeroclub-miramar", name="miramar-lugares-aeroclub-miramar")
     * @Template("AppBundle:Sitio:miramar-lugares-aeroclub-miramar.html.twig")
     */
    public function miramarLugaresAeroclubMiramarAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-arbol-tallado", name="miramar-lugares-arbol-tallado")
     * @Template("AppBundle:Sitio:miramar-lugares-arbol-tallado.html.twig")
     */
    public function miramarLugaresArbolTalladoAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-bosque-energetico", name="miramar-lugares-bosque-energetico")
     * @Template("AppBundle:Sitio:miramar-lugares-bosque-energetico.html.twig")
     */
    public function miramarLugaresBosqueEnergeticoAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-vivero-dunicola", name="miramar-lugares-vivero-dunicola")
     * @Template("AppBundle:Sitio:miramar-lugares-vivero-dunicola.html.twig")
     */
    public function miramarLugaresViveroDunicolaAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-centinela-mar", name="miramar-lugares-centinela-mar")
     * @Template("AppBundle:Sitio:miramar-lugares-centinela-mar.html.twig")
     */
    public function miramarLugaresCentinelaMarAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-cristo-hermandad", name="miramar-lugares-cristo-hermandad")
     * @Template("AppBundle:Sitio:miramar-lugares-cristo-hermandad.html.twig")
     */
    public function miramarLugaresCristoHermandadAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-feria-artesanos", name="miramar-lugares-feria-artesanos")
     * @Template("AppBundle:Sitio:miramar-lugares-feria-artesanos.html.twig")
     */
    public function miramarLugaresFeriaArtesanosAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-mar-sud", name="miramar-lugares-mar-sud")
     * @Template("AppBundle:Sitio:miramar-lugares-mar-sud.html.twig")
     */
    public function miramarLugaresMarSudAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-monumentos-miramar", name="miramar-lugares-monumentos-miramar")
     * @Template("AppBundle:Sitio:miramar-lugares-monumentos-miramar.html.twig")
     */
    public function miramarLugaresMonumentosMiramarAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-muelle-pescadores", name="miramar-lugares-muelle-pescadores")
     * @Template("AppBundle:Sitio:miramar-lugares-muelle-pescadores.html.twig")
     */
    public function miramarLugaresMuellePescadoresAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-murales-bienal", name="miramar-lugares-murales-bienal")
     * @Template("AppBundle:Sitio:miramar-lugares-murales-bienal.html.twig")
     */
    public function miramarLugaresMuralesBienalAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-museo-naturales", name="miramar-lugares-museo-naturales")
     * @Template("AppBundle:Sitio:miramar-lugares-museo-naturales.html.twig")
     */
    public function miramarLugaresMuseoNaturalesAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-archivo-historico", name="miramar-lugares-archivo-historico")
     * @Template("AppBundle:Sitio:miramar-lugares-archivo-historico.html.twig")
     */
    public function miramarLugaresArchivoHistoricoAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-parque-patricios", name="miramar-lugares-parque-patricios")
     * @Template("AppBundle:Sitio:miramar-lugares-parque-patricios.html.twig")
     */
    public function miramarLugaresParquePatriciosAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-paseo-medanos", name="miramar-lugares-paseo-medanos")
     * @Template("AppBundle:Sitio:miramar-lugares-paseo-medanos.html.twig")
     */
    public function miramarLugaresPaseoMedanosAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-playas-miramar", name="miramar-lugares-playas-miramar")
     * @Template("AppBundle:Sitio:miramar-lugares-playas-miramar.html.twig")
     */
    public function miramarLugaresPlayasMiramarAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-lugares-turismo-rural", name="miramar-lugares-turismo-rural")
     * @Template("AppBundle:Sitio:miramar-lugares-turismo-rural.html.twig")
     */
    public function miramarLugaresTurismoRuralAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/miramar-cerca", name="miramar-cerca")
     * @Template("AppBundle:Sitio:miramar-cerca.html.twig")
     */
    public function miramarCercaAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/contacto", name="contacto")
     * @Template("AppBundle:Sitio:contacto.html.twig")
     */
    public function contactoAction(Request $request)
    {
        return array();
    }
    
    /**
     * @Route("/contacto-ajax",name="contacto-ajax")
     */
    public function contactoAjaxAction(Request $request) {
    	$rta = array('ok'=>0,'error'=>0);
    	//$fuente_datos = $request->query; 
    	$fuente_datos = $request->request;
    	$nombre = $fuente_datos->get('nombre','');
    	$email = $fuente_datos->get('email','');
        $telefono = $fuente_datos->get('telefono','');
    	$mensaje = $fuente_datos->get('mensaje','');
    	/*$fecha_ingreso = $fuente_datos->get('fecha_ingreso','');
    	$fecha_salida = $fuente_datos->get('fecha_salida','');
    	$cantidad_adultos = $fuente_datos->get('cantidad_adultos','');
    	$cantidad_ninos = $fuente_datos->get('cantidad_ninos','');
    	try {
    		$fiDate = \DateTime::createFromFormat('d/m/Y',$fecha_ingreso);
    	} catch(\Excepcion $ex) {
    	}
    	try {
    		$fsDate = \DateTime::createFromFormat('d/m/Y',$fecha_salida);
    	} catch(\Excepcion $ex) {
    	}
    	if(!$fiDate) $fiDate = NULL;
    	if(!$fsDate) $fsDate = NULL;*/
    
    	$contacto = new Contacto();
    	$contacto->setNombre($nombre);
    	$contacto->setEmail($email);
    	$contacto->setTelefono($telefono);
    	$contacto->setMensaje($mensaje);
    	/*$contacto->setFecha(new \DateTime());
    	$contacto->setFechaIngreso($fiDate);
    	$contacto->setFechaSalida($fsDate);
    	$contacto->setCantidadAdultos($cantidad_adultos);
    	$contacto->setCantidadNinos($cantidad_ninos);*/
    	$this->getDoctrine()->getManager()->persist($contacto);
    	$this->getDoctrine()->getManager()->flush();
    
    	try {
    		$asunto = $this->getParameter('asunto_contacto','Contacto desde el sitio');
    		$asunto = str_replace('_nombre_',$nombre,$asunto);
    		$from = $this->getParameter('contacto_from');
    		$to = $this->getParameter('contacto_to');
    		$body = $this->renderView('AppBundle:Sitio:email_contacto.html.twig',
    				array(
    						'nombre' => $nombre,
    						'telefono' => $telefono,
    						'email' => $email,
    						'mensaje' => $mensaje,
    						/*'fecha_ingreso' => $fiDate,
    						'fecha_salida' => $fsDate,
    						'cantidad_adultos' => $cantidad_adultos,
    						'cantidad_ninos' => $cantidad_ninos*/
    				));

    		$email_reply_to = $email;
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    			$email_reply_to = $from;
    		} 
    		$message = \Swift_Message::newInstance()
    		->setSubject($asunto)
    		->setFrom($from)
    		->setTo($to)
    		->setBody($body,'text/html')
		->setReplyTo($email_reply_to)
    		;
    			
    		$this->get('mailer')->send($message);
    		$rta['ok'] = true;
    			
    	} catch(\Exception $ex) {
    		$rta['error'] = true;
    		//throw $ex;
    		error_log("Imposible enviar email de contacto ".$ex->getMessage());
    	}
    	return new JsonResponse($rta);
    }
}
