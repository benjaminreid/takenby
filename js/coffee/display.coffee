class Display
	constructor: ->
		@elements =
			photos: $('#photo-container')
			sets: $('#sets')

		@flickr = new Flickr
		@init()

	init: ->
