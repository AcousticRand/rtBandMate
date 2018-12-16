<?php
/**
 * Created by PhpStorm.
 * User: randt
 * Date: 12/4/2018
 * Time: 7:24 PM
 */

// This path should point to Composer's autoloader
require dirname(__DIR__).'/vendor/autoload.php';

use MongoDB\Client as Mongo;

$config = parse_ini_file('config.ini', true);
$database_info = $config['database'];

$connect_string = sprintf('mongodb://%s:%d', $database_info['hostname'], $database_info['port']);
$client = new Mongo($connect_string);

/**
 * @var MongoCollection
 */
$collection = $client->{$database_info['database']}->{$database_info['collection']};
/* HOW TO INSERT */
$result = $collection->insertOne( [ 'first_name' => 'Rand', 'last_name' => 'Thacker' ] );
$result = $collection->insertOne( [ 'first_name' => 'Joel', 'last_name' => 'DeLuna' ] );
$result = $collection->insertOne( [ 'first_name' => 'Tom', 'last_name' => 'Flygare' ] );
$result = $collection->insertOne( [ 'first_name' => 'Jason', 'last_name' => 'Zenda' ] );
/**/
$result = $collection->find();

foreach ($result as $entry) {
    printf("%s: %s %s\n", $entry['_id'], $entry['first_name'], $entry['last_name']);
}

function test_insert()
{

}