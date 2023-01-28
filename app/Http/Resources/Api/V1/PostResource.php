<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;


class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->key,
            'type' => 'post',
            'attributes' => [
                'title' => $this->title,
                'body' => $this->body,
                'description' => $this->description,
                'published' => $this->published,

            ],
            'relationships' => [
                'user' => new  UserResource($this->whenLoaded('user')),
            ],
            'links' => [
                'self' => Route('api:v1:posts:show', $this->key),
                'parent' => Route('api:v1:posts:index'),
            ]
        ];
    }
}
