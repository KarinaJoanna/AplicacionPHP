<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionController
 *
 * @author Yeoshua
 */
class SessionControl {

    public static function init() {
        ini_set('session.gc_maxlifetime', 60);
        session_start();
        session_unset();
        self::set("STARTED", true);
    }

    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public static function checkSession() {
        if ((self::get("CREATED") == false) || time() - self::get("CREATED") > 60) {
            self::destroy();
            //header("Location:test.php");
        }
    }

    public static function testSession() {
        session_start();
        if (!self::get("CREATED")) {
            self::set("CREATED", time());
        }     
    }

    public static function destroy() {
        session_destroy();
        session_unset();
    }
    
    public static function getId() {
        return session_id();
    }


}

?>