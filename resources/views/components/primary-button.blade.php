<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex px-4 py-2 text-sm font-medium text-white rounded-lg bg-brand-red hover:bg-red-700 focus:ring-4 focus:ring-purple-300 lg:px-5 lg:py-3']) }}>
    {{ $slot }}
</button>
