<?php
namespace Easy\SiteBundle\Twig;

class SiteExtension extends \Twig_Extension
{
  public function getFilters()
  {
    return array(
      new \Twig_SimpleFilter('link_to_hyperlink', array($this, 'linkToHyperLinkFilter')),
    );
  }

  public function linkToHyperLinkFilter($text)
  {
    $pattern = '/(https?:\/\/([-\w\.]+)+(:\d+)?(\/([\w\/_\.]*(\?\S+)?)?)?)/i';
    $replacement = '<a href="$1" target="_blank">&laquo;Lien&raquo;</a>';
    
    return preg_replace($pattern, $replacement, $text);
  }

  public function getName()
  {
    return 'site_extension';
  }
}