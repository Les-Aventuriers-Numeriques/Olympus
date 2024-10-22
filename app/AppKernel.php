<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Easy\SiteBundle\EasySiteBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Easy\UtilisateurBundle\EasyUtilisateurBundle(),
            new Easy\EspaceMembreBundle\EasyEspaceMembreBundle(),
            new Easy\SquadXmlBundle\EasySquadXmlBundle(),
            new Easy\DispoBundle\EasyDispoBundle(),
            new Easy\ArticleBundle\EasyArticleBundle(),
            new Easy\DonBundle\EasyDonBundle(),
            new Easy\ForumBundle\EasyForumBundle(),
            new Easy\FormationBundle\EasyFormationBundle(),
            new Easy\TicketBundle\EasyTicketBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Ornicar\GravatarBundle\OrnicarGravatarBundle(),
            new Cunningsoft\ChatBundle\CunningsoftChatBundle(),
            new Easy\WSBundle\EasyWSBundle(),
            new Easy\ChatBundle\ChatBundle(),
            new Easy\TeamspeakBundle\EasyTeamspeakBundle(),
            new Knp\Bundle\TimeBundle\KnpTimeBundle(),
            new SunCat\MobileDetectBundle\MobileDetectBundle(),
            new Nelmio\CorsBundle\NelmioCorsBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
    
    public function init()
    {
        date_default_timezone_set( 'Europe/Paris' );
        parent::init();
    }
}
