## Laravel Socialite

## Official Documentation

Edit the file app/services.php, with the credentials of your app

Example

'facebook' => [
        'client_id'     => 'cliente_id',
        'client_secret' => 'client_secret',
        'redirect'      => 'url-callback',
    ],
'github' => [
        'client_id' => 'client_id',
        'client_secret' => 'client_secret',
        'redirect' => 'url-callback',
    ],


### Usage

http://localhost:8000/login/{provider}

http://localhost:8000/login/facebook

http://localhost:8000/login/github

### License

[MIT license](http://opensource.org/licenses/MIT)
