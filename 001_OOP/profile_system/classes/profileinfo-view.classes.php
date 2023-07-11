<?php

/**
 * View
 * talk directly to the model class
 */

class ProfileInfoView extends ProfileInfo{

    public function fetchAbout($userId) {
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]['profiles_about'];
    }

    public function fetchTitle($userId) {
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]['profiles_introtitle'];
    }

    public function fetchProfileInfo($userId) {
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]['profiles_introtext'];
    }
}