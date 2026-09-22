<?php
/**
 * Site-wide relocation notice (above the sticky header).
 *
 * Reads the move date and new address from functions.php; renders only until
 * the move date, after which the address helpers switch to the new address
 * site-wide and this bar disappears.
 */

if (practice_has_moved()) {
    return;
}
$new_address = get_practice_new_address();
?>

<div class="relative bg-gradient-to-r from-orange-50 via-primary-50 to-orange-50 overflow-hidden">
  <!-- Animated background elements -->
  <div class="absolute inset-0 opacity-20">
    <div class="absolute top-0 left-0 w-32 h-32 bg-orange-200 rounded-full animate-pulse"></div>
    <div class="absolute top-0 right-0 w-24 h-24 bg-primary-200 rounded-full animate-pulse animate-delay-1"></div>
    <div class="absolute bottom-0 left-1/4 w-20 h-20 bg-orange-300 rounded-full animate-pulse animate-delay-2"></div>
  </div>

  <div class="relative max-w-6xl mx-auto text-center">
    <a href="<?php echo esc_url('https://www.google.com/maps/search/?api=1&query=' . rawurlencode($new_address)); ?>" target="_blank" rel="noopener noreferrer" class="group w-full flex flex-wrap items-center justify-center gap-x-6 gap-y-1 px-6 py-2.5 transition-colors duration-300 hover:bg-white/40">
      <span class="flex items-center gap-x-3">
        <span class="inline-flex items-center rounded-full bg-primary-600 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-wide text-white">
          Oct 1
        </span>
        <span class="text-sm font-bold text-gray-900 sm:text-base">
          We are moving!
        </span>
      </span>

      <span class="text-xs text-gray-700 sm:text-sm">
        As of October 1st, our new address is
        <strong class="font-semibold text-gray-900"><?php echo esc_html($new_address); ?></strong>
      </span>

      <span class="inline-flex items-center gap-x-1 text-xs font-semibold text-primary-700 sm:text-sm">
        View on Map
        <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
        </svg>
      </span>
    </a>
  </div>
</div>
