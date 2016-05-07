<?php

class Lang
{
    public static $language = 'pl';

    public static function changeLang($lang)
    {
        switch ($lang) {
            case 'pl':
                self::setLanguage($lang);
                self::setSessionLanguage();
                break;
            case 'en':
                self::setLanguage($lang);
                self::setSessionLanguage();
                break;
            default:
                self::setLanguage($lang);
                self::setSessionLanguage();
        }
    }

    public static function getLanguage()
    {
        return self::$language;
    }

    private static function setLanguage($lang)
    {
        self::$language = $lang;
    }

    private static function setSessionLanguage()
    {
        $_SESSION['lang'] = self::$language;
    }
}