<?php
// Dans le fichier /src/Easy/SiteBundle/Listener/ControllerListener
namespace Easy\SiteBundle\Listener; 
use Symfony\Component\HttpKernel\HttpKernelInterface; 
use Symfony\Component\HttpKernel\Event\FilterControllerEvent; 
// Le nom de la classe est à votre discrétion
class ControllerListener 
{	 
    // Le nom de la méthode est également à votre discrétion
    public function onCoreController(FilterControllerEvent $event) 	
    {
        // Récupération de l'event 	
        if(HttpKernelInterface::MASTER_REQUEST === $event->getRequestType()) 
        {
            // Récupération du controller    
            $_controller = $event->getController();
            if (isset($_controller[0])) 
            {
                $controller = $_controller[0];
                // On vérifie que le controller implémente la méthode preExecute
                if(method_exists($controller,'preExecute'))
                {
                    $controller->preExecute();
                }
            }
        }
 
    }
}