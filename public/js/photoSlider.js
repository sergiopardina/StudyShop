document.addEventListener("DOMContentLoaded", function() {
    let sliderWrappers = document.querySelectorAll('.slider-wrapper');

    sliderWrappers.forEach(function(sliderWrapper) {
        let nav = document.createElement('div');
        nav.classList.add('nav');
        sliderWrapper.appendChild(nav);
        let liElements = sliderWrapper.querySelectorAll('li');
        liElements.forEach(function(liElement, index) {
            let span = document.createElement('span');
            span.setAttribute('rel', index);
            nav.appendChild(span);
            liElement.classList.add('slider-wrapper' + index);
        });

        nav.querySelector('span').classList.add('on');
    });

    function mySlider(obj, sl) {
        let ul = sl.querySelector('ul');
        let bl = sl.querySelector('li.slider-wrapper' + obj);
        let step = bl.offsetWidth;
        ul.style.marginLeft = '-' + step * obj + 'px';
    }

    document.addEventListener("click", function(event) {
        if (!event.target.matches(".slider-wrapper .nav span")) {
            return;
        }
        let sl = event.target.closest(".slider-wrapper");
        let navSpans = sl.querySelectorAll('.nav span');
        navSpans.forEach(function(navSpan) {
            navSpan.classList.remove('on');
        });

        event.target.classList.add('on');
        let obj = event.target.getAttribute('rel');
        mySlider(obj, sl);
        return false;
    });
});
