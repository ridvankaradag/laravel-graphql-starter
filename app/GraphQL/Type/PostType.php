<?php

namespace App\GraphQL\Type;

use TCG\Voyager\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{    
    protected $attributes = [
        'name'          => 'Post',
        'description'   => 'A post',
        'model'         => Post::class,
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the user',
                'alias' => 'user_id', // Use 'alias', if the database column is different from the type name
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The email of user',
            ],
        ];
    }
}