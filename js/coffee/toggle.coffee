class Toggle
	constructor: ->
		@init()

	init: ->
		@getElements()
		@attachEvents()

	getElements: ->
		@elements =
			toggle: $ '#info-toggle'
			el: $ '#header'

	attachEvents: ->
		@elements.toggle.on 'click', @toggle

	toggle: (e) =>
		e.preventDefault()
		@elements.el.toggleClass 'header-open'
		@elements.toggle.toggleClass 'sp-i-icon-hover'