<?php

namespace App\Providers;

use Illuminate\Support\Arr;

use Illuminate\Support\ServiceProvider;

class PostTypesServiceProvider extends ServiceProvider
{
    /**
     * Register post types services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Register the post types assets.
         *
         * @return void
         */
        add_action('init', function () {
            $post_types = config('post-types.post_types');
            if (empty($post_types)) {
                return;
            }

            foreach ($post_types as $post_type => $args) {
                $names = Arr::pull($args, 'names');
                register_extended_post_type($post_type, $args, $names);
            }
        }, 100);

        /**
         * Register the taxonomies.
         *
         * @return void
         */
        add_action('init', function () {
            $taxonomies = config('post-types.taxonomies');
            if (empty($taxonomies)) {
                return;
            }

            foreach ($taxonomies as $taxonomy => $args) {
                $names = Arr::pull($args, 'names');
                $types = Arr::pull($args, 'post_types');
                register_extended_taxonomy($taxonomy, $types, $args, $names);
            }
        }, 100);
    }
}
