<?php
    define('_JEXEC') or die;

    class plgJPlugin extends JPlugin
    {
        protected $autoloadLanguage = true;

        public function onContentPrepare($context, &$article, &$params, $page)
        {
            return true;
        }

        public function onContentAfterTitle($context, &$article, &$params, $limitstatrt)
        {
            return '';
        }
    }
?>