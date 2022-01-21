<?php

namespace App\Http\Controllers;

use App\Classes\IpedAPI;

class IpedAPIController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new IpedAPI();
    }

    /**
     * @param string $slug
     * @return array|mixed
     */
    public function get_course_by_slug($slug = '')
    {
        $query = [
            'slug' => $slug,
            'include_topics' => '1',
        ];
        return $this->client->post('/course/get-courses', ['query' => $query]);
    }

    /**
     * @param string $id
     * @return array|mixed
     */
    public function get_course_by_id($id)
    {
        $query = [
            'course_id' => $id,
        ];
        return $this->client->post('/course/get-courses', ['query' => $query]);
    }

    /**
     * @param string $slug
     * @return array|mixed
     */
    public function get_courses_by_category_slug($slug = '')
    {
        return $this->client
            ->post('/course/get-courses', [
                'query' => [
                    'category_slug' => $slug,
                    'include_topics' => '1',
                ],
            ]);
    }

    /**
     * @param string $slug
     * @return array|mixed
     */
    public function get_category_by_slug($slug = '')
    {
        return $this->client->post('/category/get-categories', ['query' => ['slug' => $slug]]);
    }

    /**
     * @param string $id
     * @param int|null $type
     * @return array|mixed
     */
    public function get_courses_by_category_id($id, $type = null)
    {
        $query = [
            'category_id' => $id,
            'always_show' => 1,
            'results' => 1000,
        ];

        if ($type) {
            $query['type'] = $type;
        }

        return $this->client
            ->post('/course/get-courses', [
                'query' => $query,
            ]);
    }

    public function user_registration($arrayData)
    {
        return $this->client->post('/user/set-registration', ['query' => $arrayData]);
    }
}
