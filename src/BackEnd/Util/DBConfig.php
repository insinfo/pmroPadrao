<?php
/**
 * Created by PhpStorm.
 * User: Isaque
 * Date: 14/07/2017
 * Time: 18:09
 */

namespace PmroPadraoLib\Util;

class DBConfig
{
    const DEFAULT_CONNECTION = 'laravel';
    const DEFAULT_DATABASE_NAME = 'sistema';
    const DEFAULT_SCHEMA_NAME = 'pmro_padrao';

    public static $CONNECTIONS = [

        'connections' => [

            'sqlite' => [
                'driver' => 'sqlite',
                'database' => '',
                'prefix' => '',
            ],

            'mysql' => [
                'driver' => 'mysql',
                'host' => 'localhost',
                'port' => '3306',
                'database' =>'api',
                'username' => 'root',
                'password' => '',
                'unix_socket' => 'DB_SOCKET',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => '',
                'strict' => true,
                'engine' => null,
            ],

            'laravel' => [
                'driver' => 'pgsql',
                'host' => 'localhost',/*10.0.0.215 192.168.133.12*/
                'port' =>'5432',
                'database' =>'sistemas',
                'username' =>'sisadmin',
                'password' =>'s1sadm1n',
                'charset' => 'utf8',
                'prefix' => '',
                'schema' => 'pmro_padrao',
                'sslmode' => 'prefer',
            ],
            'saliTeste' => [
                'driver' => 'pgsql',
                'host' => '192.168.66.19',
                'port' =>'5432',
                'database' =>'siamweb',
                'username' =>'sw.suporte',
                'password' =>'suporte',
                'charset' => 'utf8',
                'prefix' => '',
                'schema' => 'pmro_padrao',
                'sslmode' => 'prefer',
            ],
            'saliProducao' => [
                'driver' => 'pgsql',
                'host' => '192.168.66.4',
                'port' =>'5432',
                'database' =>'siamweb',
                'username' =>'sw.suporte',
                'password' =>'suporte',
                'charset' => 'utf8',
                'prefix' => '',
                'schema' => 'public',
                'sslmode' => 'prefer',
            ],

            'pgsql' => [
                'driver' => 'pgsql',
                'host' => 'localhost',
                'port' =>'5432',
                'database' =>'sistemas',
                'username' =>'postgres',
                'password' =>'s1sadm1',
                'charset' => 'utf8',
                'prefix' => '',
                'schema' => 'public',
                'sslmode' => 'prefer',
            ],

            'sqlsrv' => [
                'driver' => 'sqlsrv',
                'host' => 'DB_HOST',
                'port' => 'DB_PORT',
                'database' => 'DB_DATABASE',
                'username' => 'DB_USERNAME',
                'password' => 'DB_PASSWORD',
                'charset' => 'utf8',
                'prefix' => '',
            ],

        ],

    ];

}



