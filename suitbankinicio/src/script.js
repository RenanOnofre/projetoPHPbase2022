const switchHighlighter = document.querySelector('.switch-highlighter')
const balanceSwitchToggle = document.querySelector('[class^="switch-toggle"]:nth-child(2)')
const extractSwitchToggle = document.querySelector('[class^="switch-toggle"]:nth-child(3)')
const switchCarousel = document.querySelector('.switch-carousel')

const flkty = new Flickity(switchCarousel, {
	cellAlign: 'center',
	prevNextButtons: false,
	pageDots: false,
	draggable: false
})

function toggleSwitch(switchName) {
	if (switchName == 'balanceSwitchToggle') {
		switchHighlighter.style.transform = 'translate3d(0, 0, 0)'
		extractSwitchToggle.classList.remove('switch-toggle-selected')
		extractSwitchToggle.classList.add('switch-toggle')
		balanceSwitchToggle.classList.remove('switch-toggle')
		balanceSwitchToggle.classList.add('switch-toggle-selected')
	} else if (switchName == 'extractSwitchToggle') {
		switchHighlighter.style.transform = 'translate3d(100%, 0, 0)'
		extractSwitchToggle.classList.remove('switch-toggle')
		extractSwitchToggle.classList.add('switch-toggle-selected')
		balanceSwitchToggle.classList.remove('switch-toggle-selected')
		balanceSwitchToggle.classList.add('switch-toggle')
	}
}

balanceSwitchToggle.addEventListener('click', ({ target }) => {
	target = target.closest('.switch-toggle')
	toggleSwitch('balanceSwitchToggle')
	flkty.select(target.dataset.tab)
})
extractSwitchToggle.addEventListener('click', ({ target }) => {
	target = target.closest('.switch-toggle')
	toggleSwitch('extractSwitchToggle')
	flkty.select(target.dataset.tab)
})

window.onload = () => flkty.resize()