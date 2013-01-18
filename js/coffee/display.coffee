class Display
	constructor: ->
		@elements =
			photos: $('#photo-container')
			sets: $('#sets')

		@flickr = new Flickr
		@init()

	init: ->
		@getElements()
		@photos()
		@sets()

	getElements: ->
		@photoTemplate 	= $('#template-photos').html()
		@setsTemplate 	= $('#template-sets').html()

	photos: ->
		self = @
		@flickr.photos (res) ->
			html = ''

			build = (photo) ->
				url 				= photo.url_l
				date 				= photo.datetaken.split '-'
				humanDate 	= date[2].split(' ')[0] + '.' + date[1] + '.' + date[0]

				data =
					src: url
					date: humanDate
					title: photo.title

				html += _.template self.photoTemplate, data
			build photo for photo in res.photoset.photo
			self.elements.photos.append html

	sets: ->
		self = @
		@flickr.sets (res) ->
			html = ''

			build = (set) ->
				url = "http://farm#{set.farm}.staticflickr.com/#{set.server}/#{set.primary}_#{set.secret}_s.jpg"
				data =
					username: self.flickr.username
					src: url
					setid: set.id

				html += _.template self.setsTemplate, data
			build set for set in res.photosets.photoset
			self.elements.sets.prepend html