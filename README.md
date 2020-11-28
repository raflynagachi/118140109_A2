# 118140109_A2
repo praktikum Web ITERA
===setting config===
config/config.php ==>> $config['base_url'] = 'http://localhost/prakWeb/week4/login-ci/';

config/routes.php ==>> 
    $route['user'] = 'user';
    $route['user/register'] = 'user/register';

    $route['news'] = 'news';
    $route['news/create'] = 'news/create';

    $route['news/edit/(:any)'] = 'news/edit/$1';

    $route['news/view/(:any)'] = 'news/view/$1';
    $route['news/(:any)'] = 'news/view/$1';

    $route['default_controller'] = 'news';
    $route['404_override'] = '';
    
config/database.php ==>>
      $db['default'] = array(
        'dsn'	=> '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => 'password',
        'database' => 'mahasiswa',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
      );
