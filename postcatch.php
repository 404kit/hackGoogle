<?php
header("Content-type: text/plain; charset=UTF-8");

// POST�ϐ����擾
$str = $_POST['str'];

// csv�ۑ�
$file = fopen("deta.csv", "a");
fwrite($file, "$str");
fwrite($file, "\n");
fclose($file);

// �t�����g�T�C�h�ւĂ��Ɓ[�ɕԂ��Ă���