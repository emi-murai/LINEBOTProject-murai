<?php

// Composer�ŃC���X�g�[���������C�u�������ꊇ�ǂݍ��݁H
require_once __DIR__ . '/vendor/autoload.php';

//POST���\�b�h�œn�����l���擾�A�\��
$inputString = file_get_contenes('php://input');
error_log($inputString);

?>