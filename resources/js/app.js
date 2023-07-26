import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

const duration = document.querySelector("#duration");
const anio = document.querySelector("#anio");
const price = document.querySelector("#price");

duration.addEventListener('input', function() {
    let valueInput = duration.value;

    duration.value = valueInput
    .replace(/\s/g, '')
	.replace(/\D/g, '')
    .trim();

    if(valueInput.length > 3)
    {
        duration.value = duration.value.slice(0, 3);
    }
});

anio.addEventListener('input', function() {
    let valueInput = anio.value;

    anio.value = valueInput
    .replace(/\s/g, '')
	.replace(/\D/g, '')
    .trim();

    if(valueInput.length > 4)
    {
        anio.value = anio.value.slice(0, 4);
    }
});

price.addEventListener('input', function() {
    let valueInput = price.value;

    price.value = valueInput
    .replace(/\s/g, '')
	.replace(/\D/g, '')
    .trim();

    if(valueInput.length > 6)
    {
        price.value = price.value.slice(0, 6);
    }
});

anio.addEventListener('blur', function() {
    console.log('Saliste del input');
});
