

        <?php
        
       $config = array(
            'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=localdb',
            'DB_USER' => 'admin',
            'DB_PASSWORD' => 'password'
        );
       
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
        
 
        ?>
