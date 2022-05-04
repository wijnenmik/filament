<x-filament-support::modal
    :attributes="$attributes"
    :dark-mode="config('forms.dark_mode')"
    heading-component="forms::modal.heading"
    hr-component="forms::hr"
    subheading-component="forms::modal.subheading"
>
    {{ $slot }}
</x-filament-support::modal>
