<!--begin::Search-->
<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-<?php echo Page::getOption('layout', 'header/search/dropdown/skin');?> m-header-search m-header-search--expandable m-header-search--skin-<?php echo Page::getOption('layout', 'header/self/skin')?>" id="m_quicksearch" data-search-type="default">

	<!--begin::Search Form -->
	<form class="m-header-search__form">
		<div class="m-header-search__wrapper">
			<span class="m-header-search__icon-search" id="m_quicksearch_search">
				<i class="la la-search"></i>
			</span>
			<span class="m-header-search__input-wrapper">
				<input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
			</span>
			<span class="m-header-search__icon-close" id="m_quicksearch_close">
				<i class="la la-remove"></i> 
			</span>
			<span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
				<i class="la la-times"></i>
			</span>
		</div>
	</form>  
	<!--end::Search Form -->

	<!--begin::Search Results -->
	<div class="m-dropdown__wrapper">
		<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
		<div class="m-dropdown__inner">	
			<div class="m-dropdown__body">
				<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
					<div class="m-dropdown__content m-list-search m-list-search--skin-<?php echo Page::getOption('layout', 'header/search/skin')?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end::Search Results -->
</div>
<!--end::Search-->