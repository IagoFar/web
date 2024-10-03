<div
    x-data="{ isHovered: false }"
    @mouseenter="isHovered = true"
    @mouseleave="isHovered = false"
    class="relative inline-block"
>
    <a href="{{ url('/dashboard') }}" class="text-zinc-900 hover:text-zinc-700 dark:text-zinc-400 dark:hover:text-zinc-100">
        <i class="fas fa-home text-sm"></i>
        <span class="ml-1 inline-block transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap"
              :class="{ 'w-0': !isHovered, 'w-20': isHovered }">
            Dashboard
        </span>
    </a>
</div>
