<?php
/*
 * Carrega as configura��es
 */
require '../application/config.php';

/*
 * Define os namespaces usados
 */
use rpo\mvc\Application;
use rpo\http\HTTPRequest;

/*
 * Cria nossa aplica��o e adiciona uma inst�ncia Imns
 * A classe Imns � o controlador base da rede social
 */
$application = new Application();
$application->attach( new com\base\Imns() );

/*
 * Executa tudo!
 * Para isso primeiro � criada uma nova inst�ncia da classe HTTPRequest que representa a requisi��o do usu�rio
 * Esse objeto ser� passado para cada controlador fazer sua parte com o m�todo handle() (Veja: rpo\mvc\Controller.php)
 */
$application->handle( HTTPRequest::getInstance( '/imns/' ) );