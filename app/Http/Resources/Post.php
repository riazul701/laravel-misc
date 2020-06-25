<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return [
//            'id' => $this->id,
//            'title' => $this->title,
//            'body' => $this->body
//        ];

        return [
            'the_custom_id' => $this->id,
            'the_custom_title' => $this->title,
            'the_custom_body' => $this->body
        ];
    }

    public function with($request) {
        return [
            'version' => '1.0.0',
            'api_url' => url('http://laravel-api-resource-tutorial/api')
        ];
    }
}
