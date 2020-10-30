## 👽 Simple IP White List

## How To Install
    composer require ilhamdev/ipwhitelist

## How To Use
### Add This Package in app/Http/Kernel.php
    protected $routeMiddleware = [
        'ipwhitelist' => \ilhamdev\ipwhitelist\middleware\CheckIpMiddleware::class,
    ];

### In Your .env add your Ip
    APP_IP_WHITELIST=127.0.0.1,192.168.1.1

### In Your Controller 
    public function __construct()
    {
        $this->middleware('ipwhitelist');
    }
