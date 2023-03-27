<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 *
 * 自动下载外链文章
 * 插件简单加密，如有问题，欢迎来访本人博客留言
 *
 * @package AutoSavePicture
 * @author cultureSun
 * @version 1.0.0
 * @link https://culturesun.site
 */
class AutoSavePicture_Plugin implements Typecho_Plugin_Interface
{


    /**
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Contents_Post_Edit')->write = array('AutoSavePicture_Plugin', 'saveFile');
        Typecho_Plugin::factory('Widget_Contents_Page_Edit')->write = array('AutoSavePicture_Plugin', 'saveFile');
    }

    /**
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
    }

    /**
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
    }

    /**
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form)
    {
    }

    /**
     *
     * @access public
     * @param array $post 数据结构体
     * @return array
     */
    public static function saveFile($r1)
    {
        $d0 = $r1['text'];
        $f2 = self::r8e90c4b6($d0);
        if (!isset($f2) || count($f2) == 0) return $r1;
        if (!isset($_POST["attachment"])) $_POST["attachment"] = array();
        foreach ($f2 as $l3) {
            $y4 = self::rabf176a29($l3);
            $d0 = self::reCxnby($d0, $l3, $y4);
        }
        $r1['text'] = $d0;
        return $r1;
    }

    static function r8e90c4b6($text)
    {

        $result = '';
        eval(self::RLG("jVHdSsMwFH6APcUZlCXR0UzxyjHvBrtTtuFNW0oMqSu0aUxSUbc+u2m7rlMr7NyEhO8v5/MUs1ZIWACi4TgMsH9FwijEeGet8q9JSCiaj+A4SovXOGeW72KWZdhryVPwrPiw7mBakx7taWHKzDrtIOpf0wRwaoywuIHDZAK8KGV7DW4jAg8wI7A/EepJCi0Y30EHAmbAe2dZKX4jO4txKmOHZZ+4xU27OGSI0bGM1aowPSXeLNfPy3WAVtvtU7x63GyRCzheLCBhmRFwOICjSJ6rEwfVm0NTuGtxs//s6uGFtKksxXwQUY0ovTBoY2ruKc3zl/TLf1Mp97mk6CxrnWNY76yrIHJtNS1roTLGBUa0kaao/1lneuO6HlasQNTb2VejS/xavb87+Mnub9U3"));
        return $result;
    }

    static function RLG($yLY)
    {
        $yLY = gzinflate(base64_decode($yLY));
        for ($i = 0; $i < strlen($yLY); $i++) {
            $yLY[$i] = chr(ord($yLY[$i]) - 1);
        }
        return $yLY;
    }


    static function reCxnby($text, $url, $path)
    {
        $text = str_ireplace($url, Helper::options()->siteUrl . substr($path, 1), $text);
        return $text;
    }

    static function rabf176a29($url)
    {
        eval(self::JeFHr("pZPfShtBFMYfoE8xlcDs0u0mCr2JqIgmRBATkthSYlgmuxMzsP+cncU/RbAX0psIgkILtV6VXrQUC+2FVWhfxrXxKTq7s0nMJqlK9yIhs9/5feecb5LSW2AG6D41NWITJsnTj0D8RIceZo7LpJTeUsDCanm5WKpq/EsBKf5WngbpNOA/g5NvwYe9uyvLuepqeaVanl+p5HNlBTDqYwHp/D4O3p8GRwfBxfGfy6Pr05POXvvq/OD63Vnn11Hw5uJueCE3vxhCm8j0YioHBO394PCLAAcff9yNqVSWtee58lL+ZSk3jLv53O6cveYa/nn189NDcIVipToWd3V+eX1yERwe9Igpij3XsT3czQdvYT1k34qop9F0x+gJ1zEjdtPp97G0ki9qhWq1pC0UF3O36nkTwf73m7dfQ9XgLLrpeDhhR5pASlrOgKlMRgaveqKoLxfRqPHoW+M8SdyXAVWI8xh1HS96qwCYTactq0F21A2X6Kpup6EMHnMLsbSESfgIPodIwrIGN3xMt2FdiXpAlsc9h6rCGXyT8f7WXhCDr2tt1TUdZGSzyDQdXZKfzvrRQQHZhomlGrSRhSGYmeW1WonnWIOMMBPDugo1qFIukzLKM74IFUAVArXrXoObW1rTYmFDkG27AgKJhdZxepyuQZgX6Xq7ric2twswX8iIffzHZJ7fuL1HF7FW2A0/EwklzmGYzRMwKY8Z7KE4tY+7x/yDt41DfT0cuja0kDinLo3vJh65rgxrPdNfv6e0PzJiDOktC9sMjkIyxHwxDXT9hkm81igZw1tMpIApQSbZwVLcgzxCHWa5ueBYkWlYNTlOVCK2mCgzTpHH2BjL4CF1LSRiM7l7+XViwDqYmwOZgZr6YEopwqOjbMn413UUGinOMJEzohRta67vtaTYeqK/7onwT961SBRSzHxq93MU16yv2f0L"));
        return $result['path'] ?? false;
    }
    static function JeFHr($qde)
    {
        $qde=gzinflate(base64_decode($qde));
        for($i=0;$i<strlen($qde);$i++)
        {
            $qde[$i] = chr(ord($qde[$i])-1);
        }
        return $qde;
    }
}
