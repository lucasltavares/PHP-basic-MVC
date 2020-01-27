<?php
class AboutUs extends Controller {

    public static function DoSomething() {
        print_r(self::query("SELECT * FROM users"));
    }
    
}