<?php namespace Wilzokch\MalaysiaPostcodeToState;

/**
 * Class MyPostCode
 * @package Wilzokch\MalaysiaPostcodeToState
 */
class MyPostCode{
    protected $postCode;
    protected $state = 'Unknown';

    public function __construct($postCode = '') {
        $this->setPostCode($postCode);
    }

    /**
     * Check first two digits in post code
     * eg. isBetween(5, 9) = post code between 05000 & 06999
     * @param $min
     * @param int $max
     * @return bool
     */
    protected function isBetween($min, $max = -1) {
        if ($max == -1) $max = $min;
        $firstTwo =  intval(substr($this->postCode, 0, 2));

        return $firstTwo >= $min && $firstTwo <= $max;
    }

    protected function checkPostCode() {
        if($this->isBetween(1, 2)) {
            $this->state = 'Perlis';
        } else if($this->isBetween(5, 9)
            || in_array($this->postCode, [
                '14290',
                '14390',
                '34950'
            ])) {
            $this->state = 'Kedah';
        } else if($this->isBetween(10, 14)) {
            $this->state = 'Penang';
        } else if($this->isBetween(15, 18)) {
            $this->state = 'Kelantan';
        } else if($this->isBetween(20, 24)) {
            $this->state = 'Terengganu';
        } else if($this->isBetween(25, 28)
            || $this->isBetween(39)
            || $this->isBetween(49)
            || $this->isBetween(69)) {
            $this->state = 'Pahang';
        } else if($this->isBetween(30, 36)) {
            $this->state = 'Perak';
        } else if($this->isBetween(40, 48)
            || $this->isBetween(63, 68)) {
            $this->state = 'Selangor';
        } else if($this->isBetween(50, 60)) {
            $this->state = 'Kuala Lumpur';
        } else if($this->isBetween(62)) {
            $this->state = 'Putrajaya';
        } else if($this->isBetween(70, 73)) {
            $this->state = 'Negeri Sembilan';
        } else if($this->isBetween(75, 78)) {
            $this->state = 'Melaka';
        } else if($this->isBetween(79, 86)) {
            $this->state = 'Johor';
        } else if($this->isBetween(87)) {
            $this->state = 'Labuan';
        } else if($this->isBetween(88, 91)) {
            $this->state = 'Sabah';
        } else if($this->isBetween(93, 98)) {
            $this->state = 'Sarawak';
        }
    }

    public function setPostCode($postCode) {
        $this->postCode = $postCode;
    }

    public function getState() {
        $this->checkPostCode();

        return $this->state;
    }
}