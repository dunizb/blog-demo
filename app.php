<?php 
    header('Content-Type:application/json;charset=utf-8');
    /*��json��ʽ�������ݵ�ʱ��Ҫ����Ӧ���ݸ�ʽ��   application/json*/

	//��ȡ�ص�������
	$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);

    $json = file_get_contents('app.json');

    /*����json_decode��������json�ַ���  ת����php���� ���鵱����php����*/
    $json_obj = json_decode($json);

    /*��php����ת����json�ַ���  json_encode*/
    $json_str = json_encode($json_obj);

	//���jsonp��ʽ������
	echo $jsoncallback . "(" . $json_str . ")";


?>