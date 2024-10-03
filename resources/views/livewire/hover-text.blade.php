<div
    x-data="{ isHovered: false }"
    @mouseenter="isHovered = true"
    @mouseleave="isHovered = false"
    class="relative inline-block"
>
    <span class="transition-opacity duration-300" :class="{ 'opacity-0': isHovered }">
        {{ $initialText }}
    </span>
    <span
        class="absolute left-0 top-0 transition-all duration-300 whitespace-nowrap overflow-hidden"
        :class="{
            'w-0 opacity-0': !isHovered,
            'w-full opacity-100': isHovered
        }"
    >
        {{ $hoverText }}
    </span>
</div>
