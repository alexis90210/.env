# .env
working with .env file ( php )

# installation

require 'vendor/autoload.php';

use \Hisoka\Env\Data;

echo json_encode( Data::getEnv());
