<?php

namespace Tests\Unit;

use Tests\TestCase;

class PostTest extends TestCase
{

    /**
     * Creating a post whitout login
     *
     * @return void
     */
    public function test_getting_post() {

        $data = [
            'title' => "T",
            'content' =>"",
        ];
        
        $this->get(route('posts.all'))->assertStatus(400);

        // dd($result);
    }
    
}
