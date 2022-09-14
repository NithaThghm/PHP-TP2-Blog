<?php

namespace App\Service;

trait View {

    public function render($title = '', $file, $variables = [], $layout = APP_ROOT.'/View/front/base.php') {
        $content = $this->renderContent($file, $variables);
        ob_start();
        include $layout;
        return ob_get_clean();
    }

    public function renderContent($file, $variables = []){
        var_dump($variables);
        extract($variables);
        ob_start();
        include APP_ROOT.'/View/'.$file;
        return ob_get_clean();
    }
}

