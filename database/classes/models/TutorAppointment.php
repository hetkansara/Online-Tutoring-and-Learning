<?php

class TutorAppointment
{
    private $user_id;
    private $tutor_id;
    private $subject_id;
    private $learning_room_id;
    private $dateTime;
    private $message;
    private $is_confirmed;

    
    public function __construct($user_id, $tutor_id, $subject_id, $learning_room_id, $dateTime, $message, $is_confirmed)
    {
        // echo "Constructor user id value - ".$user_id;
        $this->setuserid($user_id);
        $this->settutorid($tutor_id);
        $this->setsubjectid($subject_id);
        $this->setlearningroomid($learning_room_id);
        $this->setdatetime($dateTime);
        $this->setmessage($message);
        $this->setisconfirmed($is_confirmed);
    }

    public function setuserid($value) {
        $this->user_id = $value;
    }
    public function settutorid($value){
        $this->tutor_id = $value;
    }
    public function setsubjectid($value){
        $this->subject_id = $value;
    }
    public function setlearningroomid($value){
        $this->learning_room_id = $value;
    }
    public function setdatetime($value){
        $this->dateTime = $value;
    }
    public function setmessage($value){
        $this->message = $value;
    }
    public function setisconfirmed($value){
        $this->is_confirmed = $value;
    }

    public function getuserid()    {
        return $this->user_id;
    }
    public function gettutorid()    {
        return $this->tutor_id;
    }
    public function getsubjectid()    {
        return $this->subject_id;
    }
    public function getlearningroomid()    {
        return $this->learning_room_id;
    }
    public function getdatetime()    {
        return $this->dateTime;
    }
    public function getmessage()    {
        return $this->message;
    }
    public function getisconfirmed()    {
        return $this->is_confirmed;
    }
 
}