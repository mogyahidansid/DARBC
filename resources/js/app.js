import './bootstrap';

import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'

import { regions, provinces, cities, barangays } from "select-philippines-address";
// regions().then((region) => console.log(region));

Alpine.plugin(collapse)

window.Alpine = Alpine
Alpine.start()
