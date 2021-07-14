class Slider{
    constructor(options){
        this.sliderSelector = options.sliderSelector;
        this.slideToShow = options.slideToShow;
        this.slideToScroll = options.slideToScroll;
        this.slideWidth = 100 / this.slideToShow;
        this.slideMove = 0;
        this.slideTrackWidth = (this.sliderSelector.children.length - this.slideToShow) * this.slideWidth;
    }

    slideTrack(moveTo = 0){
        this.slideMove = moveTo;
        this.sliderSelector.classList.add('slider-track');

        let slides = this.sliderSelector.children;

        for (let element of slides){
            element.classList.add('slide');
            element.style.width  = this.slideWidth + "%";
            element.style.left = "-" + this.slideMove + "%";
        }
    }

    next(){
        if(this.slideMove < this.slideTrackWidth){
            this.slideMove += this.slideWidth;
        }
        this.slideTrack((this.slideMove));
    }

    prev(){
        if(this.slideMove > 0){
            this.slideMove -= this.slideWidth;
        }
        this.slideTrack(this.slideMove);
    }

    navbuttons(){
        let buttonPrev = document.createElement('button');
        let buttonNext = document.createElement('button');
        let parentElement = this.sliderSelector.parentNode;
        let prevID = this.sliderSelector.id + 'prevId';
        let nextID = this.sliderSelector.id + 'nextId';
        buttonPrev.setAttribute('id', prevID);
        buttonNext.setAttribute('id', nextID);
        buttonPrev.setAttribute('class', 'btn-prev');
        buttonNext.setAttribute('class', 'btn-next')
        parentElement.insertBefore(buttonPrev, this.sliderSelector );
        this.sliderSelector.after(buttonNext);
    }
}

// home car slider
const homeProductSlider = new Slider({
    sliderSelector: document.querySelector('#slider'),
    slideToShow: 3
})

homeProductSlider.slideTrack();
homeProductSlider.navbuttons();

document.getElementById('slidernextId').onclick = function(){
    homeProductSlider.next();
};

document.getElementById('sliderprevId').onclick = function(){
    homeProductSlider.prev();
};

// sponsors
const sponsorsSlider = new Slider({
    sliderSelector: document.querySelector('#sponsors'),
    slideToShow: 4
})

sponsorsSlider.slideTrack();
sponsorsSlider.navbuttons();

document.getElementById('sponsorsnextId').onclick = function(){
    sponsorsSlider.next();
};

document.getElementById('sponsorsprevId').onclick = function(){
    sponsorsSlider.prev();
};

// car-details-slider
// const carDetailsSlider = new Slider({
//     sliderSelector: document.querySelector('#car-details-slider'),
//     slideToShow: 1
// })

// carDetailsSlider.slideTrack();
// carDetailsSlider.navbuttons();

// document.getElementById('car-details-slidernextId').onclick = function(){
//     carDetailsSlider.next();
// };

// document.getElementById('car-details-sliderprevId').onclick = function(){
//     carDetailsSlider.prev();
// };
