<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Sticky Notes core version
	|--------------------------------------------------------------------------
	|
	| This is the sticky notes core version number. Please do not change
	| this value to have the update checker keep working as expected.
	|
	*/

	'version' => '1.2',

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/

	'debug' => TRUE,

	/*
	|--------------------------------------------------------------------------
	| Application URL
	|--------------------------------------------------------------------------
	|
	| This URL is used by the console to properly generate URLs when using
	| the Artisan command line tool. You should set this to the root of
	| your application so that it is used when running Artisan tasks.
	|
	*/

	'url' => 'http://localhost',

	/*
	|--------------------------------------------------------------------------
	| Application Timezone
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default timezone for your application, which
	| will be used by the PHP date and date-time functions. We have gone
	| ahead and set this to a sensible default for you out of the box.
	|
	*/

	'timezone' => 'UTC',

	/*
	|--------------------------------------------------------------------------
	| Application Locale Configuration
	|--------------------------------------------------------------------------
	|
	| The application locale determines the default locale that will be used
	| by the translation service provider. You are free to set this value
	| to any of the locales which will be supported by the application.
	|
	*/

	'locale' => 'en',

	/*
	|--------------------------------------------------------------------------
	| Encryption Key
	|--------------------------------------------------------------------------
	|
	| This key is used by the Illuminate encrypter service and should be set
	| to a random, 32 character string, otherwise these encrypted strings
	| will not be safe. Please do this before deploying an application!
	|
	*/

	'key' => 'a422bbcb9090539b672d6a6eb9300982',

	/*
	|--------------------------------------------------------------------------
	| Autoloaded Service Providers
	|--------------------------------------------------------------------------
	|
	| The service providers listed here will be automatically loaded on the
	| request to your application. Feel free to add your own services to
	| this array to grant expanded functionality to your applications.
	|
	*/

	'providers' => array(

		// Illuminate
		'Illuminate\Foundation\Providers\ArtisanServiceProvider',
		'Illuminate\Auth\AuthServiceProvider',
		'Illuminate\Cache\CacheServiceProvider',
		'Illuminate\Foundation\Providers\CommandCreatorServiceProvider',
		'Illuminate\Session\CommandsServiceProvider',
		'Illuminate\Foundation\Providers\ComposerServiceProvider',
		'Illuminate\Routing\ControllerServiceProvider',
		'Illuminate\Cookie\CookieServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
		'Illuminate\Encryption\EncryptionServiceProvider',
		'Illuminate\Filesystem\FilesystemServiceProvider',
		'Illuminate\Html\HtmlServiceProvider',
		'Illuminate\Foundation\Providers\KeyGeneratorServiceProvider',
		'Illuminate\Log\LogServiceProvider',
		'Illuminate\Mail\MailServiceProvider',
		'Illuminate\Foundation\Providers\MaintenanceServiceProvider',
		'Illuminate\Database\MigrationServiceProvider',
		'Illuminate\Foundation\Providers\OptimizeServiceProvider',
		'Illuminate\Pagination\PaginationServiceProvider',
		'Illuminate\Foundation\Providers\PublisherServiceProvider',
		'Illuminate\Queue\QueueServiceProvider',
		'Illuminate\Redis\RedisServiceProvider',
		'Illuminate\Auth\Reminders\ReminderServiceProvider',
		'Illuminate\Foundation\Providers\RouteListServiceProvider',
		'Illuminate\Database\SeedServiceProvider',
		'Illuminate\Foundation\Providers\ServerServiceProvider',
		'Illuminate\Session\SessionServiceProvider',
		'Illuminate\Foundation\Providers\TinkerServiceProvider',
		'Illuminate\Translation\TranslationServiceProvider',
		'Illuminate\Validation\ValidationServiceProvider',
		'Illuminate\View\ViewServiceProvider',
		'Illuminate\Workbench\WorkbenchServiceProvider',

		// Kenmoini
		'Kenmoini\Akismet\AkismetServiceProvider',

		// Mews
		'Mews\Captcha\CaptchaServiceProvider',

		// StickyNotes
		'StickyNotes\Hashing\HashServiceProvider',

	),

	/*
	|--------------------------------------------------------------------------
	| Service Provider Manifest
	|--------------------------------------------------------------------------
	|
	| The service provider manifest is used by Laravel to lazy load service
	| providers which are not needed for each request, as well to keep a
	| list of all of the services. Here, you may set its storage spot.
	|
	*/

	'manifest' => storage_path().'/meta',

	/*
	|--------------------------------------------------------------------------
	| Class Aliases
	|--------------------------------------------------------------------------
	|
	| This array of class aliases will be registered when this application
	| is started. However, feel free to register as many as you wish as
	| the aliases are "lazy" loaded so they don't hinder performance.
	|
	*/

	'aliases' => array(

		// Illuminate
		'App'                           => 'Illuminate\Support\Facades\App',
		'Artisan'                       => 'Illuminate\Support\Facades\Artisan',
		'Auth'                          => 'Illuminate\Support\Facades\Auth',
		'Blade'                         => 'Illuminate\Support\Facades\Blade',
		'Cache'                         => 'Illuminate\Support\Facades\Cache',
		'ClassLoader'                   => 'Illuminate\Support\ClassLoader',
		'Config'                        => 'Illuminate\Support\Facades\Config',
		'Controller'                    => 'Illuminate\Routing\Controllers\Controller',
		'Cookie'                        => 'Illuminate\Support\Facades\Cookie',
		'Crypt'                         => 'Illuminate\Support\Facades\Crypt',
		'DB'                            => 'Illuminate\Support\Facades\DB',
		'Eloquent'                      => 'Illuminate\Database\Eloquent\Model',
		'Event'                         => 'Illuminate\Support\Facades\Event',
		'File'                          => 'Illuminate\Support\Facades\File',
		'Form'                          => 'Illuminate\Support\Facades\Form',
		'Guard'                         => 'Illuminate\Auth\Guard',
		'Hash'                          => 'Illuminate\Support\Facades\Hash',
		'HTML'                          => 'Illuminate\Support\Facades\HTML',
		'Input'                         => 'Illuminate\Support\Facades\Input',
		'Lang'                          => 'Illuminate\Support\Facades\Lang',
		'Log'                           => 'Illuminate\Support\Facades\Log',
		'Mail'                          => 'Illuminate\Support\Facades\Mail',
		'Paginator'                     => 'Illuminate\Support\Facades\Paginator',
		'Password'                      => 'Illuminate\Support\Facades\Password',
		'Queue'                         => 'Illuminate\Support\Facades\Queue',
		'Redirect'                      => 'Illuminate\Support\Facades\Redirect',
		'Redis'                         => 'Illuminate\Support\Facades\Redis',
		'Request'                       => 'Illuminate\Support\Facades\Request',
		'Route'                         => 'Illuminate\Support\Facades\Route',
		'Schema'                        => 'Illuminate\Support\Facades\Schema',
		'Seeder'                        => 'Illuminate\Database\Seeder',
		'Session'                       => 'Illuminate\Support\Facades\Session',
		'Str'                           => 'Illuminate\Support\Str',
		'URL'                           => 'Illuminate\Support\Facades\URL',
		'Validator'                     => 'Illuminate\Support\Facades\Validator',

		// Mews
		'Captcha'                       => 'Mews\Captcha\Facades\Captcha',

		// StickyNotes
		'API'                           => 'StickyNotes\API',
		'Antispam'                      => 'StickyNotes\Antispam',
		'Cron'                          => 'StickyNotes\Cron',
		'Feed'                          => 'StickyNotes\Feed',
		'GoogleSvc'                     => 'StickyNotes\GoogleSvc',
		'Highlighter'                   => 'StickyNotes\Highlighter',
		'PHPass'                        => 'StickyNotes\PHPass',
		'PHPDiff'                       => 'StickyNotes\PHPDiff',
		'Response'                      => 'StickyNotes\Response',
		'Setup'                         => 'StickyNotes\Setup',
		'StickyNotesDBUserProvider'     => 'StickyNotes\Auth\StickyNotesDBUserProvider',
		'StickyNotesLDAPUserProvider'   => 'StickyNotes\Auth\StickyNotesLDAPUserProvider',
		'System'                        => 'StickyNotes\System',
		'View'                          => 'StickyNotes\View',

		// PHPDiff
		'DiffRenderer'                  => 'Diff_Renderer_Html_SideBySide',

	),

);
