<?php

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample(): void
    {
        $this->get('/');

        $this->assertContains(
            'codebug.ru',
            $this->response->getContent()
        );
    }
}
