<?php

namespace App\Http\Controllers;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    public function toArray($request)
    {
        /** @var \App\Models\Task */
        $task = $this->resource;
        assert($task->relationLoaded('status')); // N+1が起きないようにロードされていることを確認

        return [
            'id' => $task->id,
            'name' => $task->name,
            'description' => $task->description,
            'status' => $task->status->name,
        ];
    }
}