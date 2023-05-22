<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BlocksServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Render blocks with Blade templates
         */
        add_filter('render_block', function ($block_content, $block) {
            if ($block['blockName'] === 'radicle/modal') {
                return view('blocks.modal', [
                    'block' => $block,
                    'blockContent' => $block_content,
                    'buttonText' => $block['attrs']['buttonText'] ?? null,
                    'heading' => $block['attrs']['heading'] ?? null,
                ]);
            }
            return $block_content;
        }, 10, 2);
    }
}
