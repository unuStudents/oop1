<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // return view('index');
        $data = [
            "title" => "Dashboard"
        ];
        return view('000', $data);
    }
    public function oop1()
    {
        $data = [
            "title" => "OOP1"
        ];
        return view('OOP1_ClassAndObject', $data);
    }
    public function oop2()
    {
        $data = [
            "title" => "OOP2"
        ];
        return view('OOP2_ConstructFunction', $data);
    }
    public function oop3()
    {
        $data = [
            "title" => "OOP3"
        ];
        return view('OOP3_Inheritance', $data);
    }
    public function oop32()
    {
        $data = [
            "title" => "OOP32"
        ];
        return view('OOP3_Inheritance_2', $data);
    }
    public function oop4()
    {
        $data = [
            "title" => "OOP4"
        ];
        return view('OOP4_FunctionOverriding', $data);
    }
    public function oop5()
    {
        $data = [
            "title" => "OOP5"
        ];
        return view('OOP5_AccessModifierPublic', $data);
    }
    public function oop6()
    {
        $data = [
            "title" => "OOP6"
        ];
        return view('OOP6_AccessModifierPrivate', $data);
    }
    public function oop7()
    {
        $data = [
            "title" => "OOP7"
        ];
        return view('OOP7_AccessModifierPrivate2', $data);
    }
    public function oop8()
    {
        $data = [
            "title" => "OOP8"
        ];
        return view('OOP8_AccessModifierProtected', $data);
    }
    public function oopdm()
    {
        $data = [
            "title" => "OOPDM"
        ];
        return view('OOP_Dasar_Manusia', $data);
    }
    public function oopdmi()
    {
        $data = [
            "title" => "OOPDMI"
        ];
        return view('OOP_Dasar_Manusia_Inheritance', $data);
    }
}
