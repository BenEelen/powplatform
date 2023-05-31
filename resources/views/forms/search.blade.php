<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
    <label>
        <span class="sr-only">
            {{ _x('Search for:', 'label', 'sage') }}
        </span>

        <input
            type="search"
            placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
            value="{{ get_search_query() }}"
            name="s"
        >
    </label>

    <x-button>{{ _x('Search', 'submit button', 'sage') }}</x-button>
</form>
