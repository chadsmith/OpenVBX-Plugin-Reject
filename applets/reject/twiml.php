<?php
$response = new TwimlResponse;
$response->reject(array('reason' => AppletInstance::getValue('reason', 'rejected')));
$response->respond();