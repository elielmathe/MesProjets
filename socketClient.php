<?php
	//phpinfo();
	echo "Ce socket va commencer";
	$socket = socket_create(AF_INET,SOCK_STREAM,0);
	//$resultat = socket_bind($socket,"127.0.0.1",1202);
	$resultat = socket_connect($socket,"127.0.0.1",1203);
	$data="Eliel";
	socket_send($socket,$data,strlen($data),MSG_OOB);
	while($valeur = socket_read($socket,2550)){
		echo $valeur;
	}
	socket_close($socket);
