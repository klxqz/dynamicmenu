<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopDynamicmenuPlugin extends shopPlugin {

    protected static $plugin;

    public function __construct($info) {
        parent::__construct($info);
        if (!self::$plugin) {
            self::$plugin = &$this;
        }
    }

    protected static function getThisPlugin() {
        if (self::$plugin) {
            return self::$plugin;
        } else {
            return wa()->getPlugin('dynamicmenu');
        }
    }

    public function frontendNav() {
        if ($this->getSettings('default_output')) {
            $html = self::display();
            return $html;
        }
    }

    public static function display() {
        $plugin = self::getThisPlugin();
        $menu = $plugin->getHtmlMenu();
        if ($plugin->getSettings('status')) {
            $view = wa()->getView();
            $view->assign('settings', $plugin->getSettings());
            $view->assign('menu', $menu);
            $template_path = wa()->getAppPath('plugins/dynamicmenu/templates/DynamicMenu.html', 'shop');
            return $view->fetch($template_path);
        }
    }

    protected function getHtmlMenu() {
        $helper = new shopViewHelper(wa());
        $categories = $helper->categories(0, null, true);
        if (!$categories) {
            return false;
        }
        $css_class = '';
        switch ($this->getSettings('typemenu')) {
            case 'vertical':
                $css_class = ' sf-vertical';
                break;
            case 'navbar':
                $css_class = ' sf-navbar';
                break;
        }

        $html = '<ul class="sf-menu' . $css_class . '" id="dynamicmenu">';
        foreach ($categories as $category) {
            $html .= '<li><a href="' . $category['url'] . '">' . $category['name'] . '</a>';
            if ($sub = $this->__recursion($category['childs'])) {
                $html .= $sub;
            }
            $html .= '</li>';
        }
        $html .= '</ul>';
        return $html;
    }

    protected function __recursion($categories) {
        if (!$categories) {
            return false;
        }
        $html = '<ul>';
        foreach ($categories as $category) {
            $html .= '<li><a href="' . $category['url'] . '">' . $category['name'] . '</a>';
            if ($sub = $this->__recursion($category['childs'])) {
                $html .= $sub;
            }
            $html .= '</li>';
        }
        $html .= '</ul>';
        return $html;
    }

}
