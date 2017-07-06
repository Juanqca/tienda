<?php 
	return array(
	//asignando las credenciales del paypal
	'client_id'=>'AYItyZCR84YvJd6rPF2znIXX8mHVNMSOkauUPgyiBs7UFr5EV8IscdfZY5XsufTADJeQqjSuSrquBUEd',
	'secret'=>'EBg-rXTtJemgASoN9LmdQNCnYIoo-StJB6jjBWaf-bcF-ddOZxRRU_W75w8WOb8mwbnKGv2twTUzQxuW',
	
 /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
		),
	);