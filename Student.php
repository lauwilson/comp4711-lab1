<?php

/**
* Class which represents a Student
* object parameters:
* surname:      The Student's surname.
* first_name:   The Student's first name.
* emails:       An array of the student's Emails.
* grades:       An array of grades obtained by student.
*/
class Student {

    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Adds an email address to the student's emails list.
     *
     * Parameters
     * $which:      the type of email address.
     * $address:    the URI of the email address.
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * Adds an course grade to the student's record.
     *
     * Parameters
     * $grade:    the percentage grade the student received in class.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Gets the student's current course average.
     *
     * Returns:
     *  The student's current average grade across all courses.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * A string representation of the Student object.
     *
     * Returns:
     *  A string representation of the Student which highlights the name,
     *  average grade, and list of emails.
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
