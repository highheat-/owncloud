<?php

// Init owncloud
require_once '../../lib/base.php';
OCP\JSON::callCheck();

// Check if we are a user
if( !OC_User::isLoggedIn() || !OC_Group::inGroup( OC_User::getUser(), 'admin' )) {
	OC_JSON::error(array("data" => array( "message" => $l->t("Authentication error") )));
	exit();
}

OCP\JSON::callCheck();

$groupname = $_POST["groupname"];

// Does the group exist?
if( in_array( $groupname, OC_Group::getGroups())) {
	OC_JSON::error(array("data" => array( "message" => $l->t("Group already exists") )));
	exit();
}

// Return Success story
if( OC_Group::createGroup( $groupname )) {
	OC_JSON::success(array("data" => array( "groupname" => $groupname )));
}
else{
	OC_JSON::error(array("data" => array( "message" => $l->t("Unable to add group") )));
}
