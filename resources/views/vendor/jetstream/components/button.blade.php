<button
    {{ $attributes->merge(['type' => 'submit','class' =>'inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-xs text-primary uppercase tracking-widest  active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
