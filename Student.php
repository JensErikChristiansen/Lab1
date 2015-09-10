<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * A student!!!!
 *
 * @author Jens Christiansen
 */
class Student {
    
    // Constructor
    function _construct() {
        $this -> surname = '';
        $this -> first_name = '';
        $this -> emails = array();
        $this -> grades = array();
    }
    
    // Adds email to specified index
    function add_email($which, $address) {
        $this -> emails[$which] = $address;
    }
    
    // adds grade to end of grades list
    function add_grade($grade) {
        $this -> grades[] = $grade;
    }
    
    // finds the average of all grades
    function average() {
        $total = 0;
        foreach ($this -> grades as $value) {
            $total += $value;
        }
        return $total / count($this -> grades);
    }
    
    // displays student information
    function toString() {
        $result = $this -> first_name . ' ' . $this -> surname;
        $result .= ' (' . $this -> average() . ")\n";
        
        foreach ($this -> emails as $key => $value) {
            $result .= $key . ': ' . $value . "\n";
            $result .= "\n";
        }
        
        return '<pre>' . $result . '</pre>';
    }
}
