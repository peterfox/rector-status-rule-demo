
Setup with:

```shell
composer install
```

Check tests work:

```shell
php artisan test
```

Run Rector with:

```shell
./vendor/bin/rector
```

This should change the file `tests/Feature/ExampleTest.php` from:

```php
<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertSeeText('Laravel')->assertStatus(200);
    }
}

```

to:

```php
<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertSeeText('Laravel')->assertOk();
    }
}

```

Then run `./vendor/bin/ecs check tests --fix` to format the test.

```php
<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertSeeText('Laravel')
            ->assertOk();
    }
}

```
