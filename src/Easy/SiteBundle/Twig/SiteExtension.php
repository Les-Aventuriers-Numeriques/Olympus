<?php

namespace Easy\SiteBundle\Twig;

class SiteExtension extends \Twig_Extension {

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('link_to_hyperlink', array($this, 'linkToHyperLinkFilter')),
            new \Twig_SimpleFilter('replace_smileys', array($this, 'replaceSmileys')),
            new \Twig_SimpleFilter('replace_memes', array($this, 'replaceMemes')),
        );
    }

    public function replaceSmileys($text) {
        $smileys = array(
            array(
                array(':)', ':-)'),
                'smile'
            ),
            array(
                array('8)', '8-)'),
                'cool'
            ),
            array(
                array(':(', ':-('),
                'sad'
            ),
            array(
                array(';(', ';-(', ':\'('),
                'cry'
            ),
            array(
                array(':D', ':-D', '^^'),
                'lol'
            ),
            array(
                array(':P', ':-P', ':p', ':-p'),
                'razz'
            ),
            array(
                array(';)', ';-)'),
                'wink'
            ),
            array(
                array(':o', ':O', ':-o', ':-O'),
                'eek'
            ),
            array(
                array(':|', ':-|'),
                'neutral'
            ),
            array(
                array('oO', 'o_O', 'o_o'),
                'shock'
            ),
            array(
                array('O:-)', 'O:)'),
                'angel'
            ),
            array(
                array(':S', ':-S', ':s', ':-s', ':/', ':-/'),
                'confuse'
            ),
            array(
                array('><', '><"'),
                'squint'
            ),
            array(
                array('+1', '\o/'),
                'thumb-up'
            ),
            array(
                array('médaille'),
                'medal'
            )
        );

        $search = array();
        $replace = array();


        foreach ($smileys as $i => $infos) {
            $search[] = "~(?<!http|https|ftp|ftps)(" . implode('|', array_map('preg_quote', $infos[0])) . ")~";
            $replace[] = '<img src="/bundles/easysite/images/smileys/' . $infos[1] . '.png" width="16" height="16">';
        }

        return preg_replace($search, $replace, $text);
    }

    public function replaceMemes($text) {

        $memes = array(
            array(
                array('10-guy'),
                '10-guy'
            ),
            array(
                array('aliens'),
                'aliens'
            ),
            array(
                array('bad-luck-brian'),
                'bad-luck-brian'
            ),
            array(
                array('brace-yourselves'),
                'brace-yourselves'
            ),
            array(
                array('10-guy'),
                'one-does-not-simply'
            ),
            array(
                array('putin'),
                'putin'
            ),
            array(
                array('scumbag'),
                'scumbag'
            ),
            array(
                array('success-kid'),
                'success-kid'
            ),
            array(
                array('too-damn-high'),
                'too-damn-high'
            ),
            array(
                array('true-story'),
                'true-story'
            ),
        );
        
        $search = array();
        $replace = array();
        
        foreach ($memes as $i => $infos) {
            $search[] = "~(?<!http|https|ftp|ftps)(" . implode('|', array_map('preg_quote', $infos[0])) . ")~";
            $replace[] = '<img src="/bundles/easysite/images/memes/' . $infos[1] . '.jpg" width="64" height="64">';
        }

        return preg_replace($search, $replace, $text);
    }

    public function linkToHyperLinkFilter($text) {
        $pattern = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]+(\/\S*)?/';
        $replacement = '<a href="$0" target="_blank">&laquo;Lien&raquo;</a>';

        return preg_replace($pattern, $replacement, $text);
    }

    public function getName() {
        return 'site_extension';
    }

}
