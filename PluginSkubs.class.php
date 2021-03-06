<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die(__FILE__ . ' : Hacking attemp!');
}


class PluginSkubs extends Plugin
{

    // Объявление делегирований (нужны для того, чтобы назначить свои экшны и шаблоны)
    public $aDelegates = array();

    // Объявление переопределений (модули, мапперы и сущности)
    protected $aInherits = array(
        'entity' => array('ModuleBlog_EntityBlog'),
    );

    public function Activate()
    {
        return true;
    }

    public function Deactivate()
    {
        return true;
    }


    // Инициализация плагина
    public function Init()
    {
        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__) . "css/skubs.css"); // Добавление своего CSS
    }
}

