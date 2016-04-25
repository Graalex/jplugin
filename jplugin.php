<?php
/**
 * pagage   Joomla.Plugin
 * subpacage JPlugin plugin
 * copyright (c) 2016. Grigorchuk Aleksandr
 * license MIT
 */

define('_JEXEC') or die;

/**
 * Class plgJPlugin
*/
class plgJPlugin extends JPlugin
{
    protected $autoloadLanguage = true;

    /**
     * Обрабатывает событие onContentPrepare.
     *
     * @param   string  $context    Контекст в котором начинает обрабатіваться контент
     * @param   mixed   $article    Статья
     * @param   mixed $params   Дополнительные параметры переданные в плагин
     * @param   integer $page   Необязательный номер страницы. По умолчанию 0
     *
     * @return bool True если обработка прошла успешно
    */
    public function onContentPrepare($context, &$article, &$params, $page)
    {
        //TODO: Добавить логику обработки события.
        return true;
    }

    /**
     * Обрабатывает событие onContentAfterTitle
     *
    * @param string  $context    Контекст в котором начинает обрабатіваться контент
     * @param   mixed   $article    Статья
     * @param   mixed $params   Дополнительные параметры переданные в плагин
     * @param   integer $limitstatrt    Номер страницы с которой добавляется контент
     * @return  string Добавляемый контент после заголовка страницы
    */
    public function onContentAfterTitle($context, &$article, &$params, $limitstatrt)
    {
        //TODO: Добавить логику обработки события.
        return '';
    }
}
